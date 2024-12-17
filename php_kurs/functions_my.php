<?php
# ---------- Includes -------------------
# die Benennung der datei mit inc.php ist optional
include 'includes/datei.inc.php'; # include ist wie import, wirft Fehler wenn eine Funktion aus der datei.inc.php verwendet wird
require 'includes/datei2.inc.php'; # require ist wie include nur wirft es sofort Fehler, wenn es nicht funktioniert
// Alternativen:
// include_once
// require_once

function flaeche($radius)
{
    if ($radius >= 0) $erg = M_PI * $radius * $radius;
    else $erg = false;
    return $erg; # mehrere returns sind möglich in einer Funktion, aber keine gute Praxis
    # aber jedes Return kann nur einen Wert zurück geben
    # sollen mehrere Werte returned werden packt man sie in einen Array
}
echo "<br>";
var_dump(flaeche(-10));
echo "ende<br>";

# ------------ optionale Parameter ------------
echo "<br>----- optionale Parameter ----------<br>";
function optio($param1 = "optional", $param2 = "optional")
{
    echo $param1 . " und " . $param2 . "<br>";
}
optio();

# optionale Parameter sollten am Ende stehen
function optio2($param1, $param2 = "optional")
{
    echo $param1 . " und " . $param2 . "<br>";
}
optio2("required Param", "optionaler Param");
# splat operator?
function summe(...$param)
{
    var_dump($param);
    echo "<br>";
    echo array_sum($param);
    echo "<br>";
}
summe(1, 3, 5, 7, 8, 9);

function summe1()
{
    var_dump(func_get_args()); # alle Argumente
    $array = func_get_args();
    echo "<br>";
    var_dump($array);
    echo "<br>";

    echo func_get_arg(3); # einzelne Argumente
    echo "<br>";
    var_dump($array[3]);
    echo "<br>";
    echo func_num_args(); # Anzahl der Argumente
    echo "<br>";
}
summe1(1, 3, 5, 7, 8, 9);

echo "<br>----- function mit erwarteten Datentypen ------<br>";
function datatype(int $param){
    echo "<br>";
    return $param;
}

var_dump(datatype(10));
var_dump(datatype(10.5)); # wird konvertiert auf int 10
var_dump(datatype("10")); # wird konvertiert auf int 10
var_dump(datatype("10.5")); # wird konvertiert auf int 10
# var_dump(datatype("20.5 mit Fatal error")); # Fatal error
# var_dump(datatype("geht nicht")); # Fatal error

echo "<br>";
function datatype2(bool $param){
    echo "<br>";
    return $param;
}
var_dump(datatype2(10)); # wird konvertiert auf bool(true)
var_dump(datatype2("geht nicht")); # wird konvertiert auf bool(true)
var_dump(datatype2("")); # wird konvertiert auf bool(false)

echo "<br><br>------- mit definiertem Return-Typ (bool) ------";
function datatype3(int $param) : bool{
    echo "<br>";
    return $param;
}
var_dump(datatype3(10)); # wird konvertiert auf bool(true)
var_dump(datatype3("10")); # wird konvertiert auf bool(true)
var_dump(datatype3("0")); # wird konvertiert auf bool(false)

echo "<br><br>------- mit mehreren definiertem Eingabe und Return-Typen ------";
function datatype4(int|string $param) : bool|string{
    echo "<br>";
    return $param;
}
var_dump(datatype4(10)); # wird konvertiert auf "10"
var_dump(datatype4("10")); # wird konvertiert auf "10"
var_dump(datatype4("string")); # wird konvertiert auf "string"

echo "<br><br>------- Strikt Mode? ------";

// declare strict_types()