<?php

echo "<h3>Taschenrechner</h3>";
$zahl1 = 0.5;
$zahl2 = "8";
$operator = "*";

if (is_numeric($zahl1) && is_numeric($zahl2)) {

    switch ($operator) {
        case "+":
            $erg = $zahl1 + $zahl2;break;
        case "-":
            $erg = $zahl1 - $zahl2;break;
        case "*":
            $erg = $zahl1 * $zahl2;break;
        case "/":
            if ($zahl2 != 0) {
                $erg = $zahl1 / $zahl2;
            } else {
                $erg = "Teilen durch 0 ist nicht möglich!";
            };break;
        default:
            $erg = "Das ist kein zulässiger Operator!";
    }
} else {
    $erg = "Beide Zahlen müssen numerisch sein!";
}

if (is_numeric($erg)) {
    echo "Ihr Ergebnis aus :  $zahl1  $operator  $zahl2  =  <b>$erg</b>";
} else {
    echo $erg;
}
