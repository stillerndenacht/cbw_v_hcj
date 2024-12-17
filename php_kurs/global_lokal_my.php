<?php
$global = "Global";
const Konstante = "Konstante";

function zugriff()
{
    $local = "Lokal";
    echo $local . "<br>";
    // echo $global . "<br>"; # ist hier Undefined
    echo Konstante . "<br>";
}
zugriff();

// echo $local . "<br>"; # ist hier Undefined
echo $global . "<br>";
echo Konstante . "<br>";


function zugriff2()
{
    global $madeglobal;
    $madeglobal = "made Global";

    echo $madeglobal . "<br>";
}

zugriff2();
echo $madeglobal . "<br>";

var_dump($GLOBALS); # $GLOBALS gibt alle globalen auch die superglobalen PHP-Variablen
echo "<br>";
print_r($GLOBALS);
$GLOBALS["global"] = "geänderte global"; # so kann man auch zugreifen
echo "<br>";
print_r($GLOBALS);
unset($GLOBALS["global"]); # gelöscht
echo "<br>";
print_r($GLOBALS["global"]); # und sie ist weg
