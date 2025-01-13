<?php
# Links :   https://www.php.net/manual/de/reserved.exceptions.php
#           https://www.php.net/manual/de/spl.exceptions.php

# Exceptions im normalen PHP - nicht PDO
// var_dump(new Exception("Es ist ein 1. Fehler aufgetreten"));
// echo "<br>nach der 1. Exception";
// throw new Exception("Es ist ein 2. Fehler aufgetreten");
// echo "<br>nach der 2. Exception";

// $execption = new Exception("Es ist ein 3. Fehler aufgetreten");
// var_dump($execption);
// throw $execption;
// echo "<br>nach der Exception";

# -------- --------Abfangen von Exceptions
echo "<br>-------- Abfangen von Exceptions----------<br>";
try {
    throw new Exception("Es ist ein 4. Fehler aufgetreten", 1111); # 1111 ist der selbst bestimmte Errorcode
} catch (Exception $e) {
    echo "die folgende Exception wurde gefangen: <br>" . $e;
    echo "<br>";
    var_dump($e);
    echo "<br>";
    echo $e->getCode() . '<br>'; # und so kann man den Errorcode abfragen

}
# Ausgabe des var_dump
// object(Exception)#1 (7) { 
//      ["message":protected]=> string(32) "Es ist ein 4. Fehler aufgetreten" 
//      ["string":"Exception":private]=> string(119) "Exception: Es ist ein 4. Fehler aufgetreten in C:\xampp\htdocs\hcj_cbw\php_kurs\exeptions.    php:15 Stack trace: #0 {main}" 
//      ["code":protected]=> int(1111) 
//      ["file":protected]=> string(46) "C:\xampp\htdocs\hcj_cbw\php_kurs\exeptions.php" 
//      ["line":protected]=> int(15) 
//      ["trace":"Exception":private]=> array(0) { } 
//      ["previous":"Exception":private]=> NULL } 

# ---------------- Exceptions mit Funktionen
echo "<br>-------- Exceptions mit Funktionens----------<br>";
function division($z1, $z2)
{
    if ($z2 == 0) throw new Exception('durch 0 geht nicht...', 2222);
    return $z1 / $z2;
}

try {
    $erg = division(10, 0);
    echo $erg;
} catch (Exception $e) {
    echo $e->getMessage() . '<br>';
    echo $e->getCode() . '<br>';
}

# ----------- mit der fertigen DivisionByZeroError Klasse
echo "<br>--- mit der fertigen DivisionByZeroError Klasse----------<br>";
function division2($z1, $z2)
{
    return $z1 / $z2;
}

try {
    $erg = division2(10, 0);
    echo $erg;
} catch (DivisionByZeroError $e) {
    echo $e->getMessage() . '<br>';
    echo $e->getCode() . '<br>';
}

# ------------- und jetzt nochmal mit --- finally -----
echo "<br>----- und jetzt nochmal mit --- finally----------<br>";
function division3($z1, $z2)
{
    return $z1 / $z2;
}
try {
    $erg = division3(10, 1); 
    # wenn hier ein Fehler ausser /0 drin ist, kommt trotzdem eine Exception, die dann nicht abgefangen wird, dann wird zwar finally ausgegeben aber danach ist Schluss
    echo $erg;
} catch (DivisionByZeroError $e) {
    echo $e->getMessage() . '<br>';
    echo $e->getCode() . '<br>';
} finally {
    echo "Hier kann man noch aufräumen... auch wenn irgendwas nicht abgefangen wird, weil finally kommt immer<br>";
}
echo "nach dem finally<br>";


echo "<br>----- eigene Exceptions ----------<br>";

class MeineException  extends Exception {}

$test = "meinFehler"; # hier ggf. $test anders definieren
$test = "irgendwas";

try {
    if ($test == "meinFehler") {
        throw new MeineException("Es ist MeineException aufgetreten", 333);
    } else {
        throw new Exception("irgendein Fehler", 815);
    }
} catch (MeineException $e) {
    echo "die folgende Exception wurde gefangen: <br>" . $e;
    echo "<br>";
    echo $e->getCode() . '<br>';
} catch (Exception $e) {
    echo "die folgende Exception wurde gefangen: <br>" . $e;
    echo "<br>";
    echo $e->getCode() . '<br>';
}

echo "<br>----- eigene Exceptions mit Weitergabe der Exception ----------<br>";

class MeineException2  extends Exception {}

$test = "meinFehler"; # hier ggf. $test anders definieren
#$test = "irgendwas";

try {
    if ($test == "meinFehler") {
        throw new MeineException2("Es ist MeineException2 aufgetreten", 444);
    } else {
        throw new Exception("irgendein Fehler", 915);
    }
} catch (MeineException2 $e) {
    echo "die folgende Exception wurde gefangen: <br>" . $e;
    echo "<br>";
    echo $e->getCode() . '<br>';
    throw $e; # ------ hier Weiterwerfen der Exception
} catch (Exception $e) {
    echo "die folgende Exception wurde gefangen: <br>" . $e;
    echo "<br>";
    echo $e->getCode() . '<br>';
}

# try - catch - finally kann man auch verschachteln..