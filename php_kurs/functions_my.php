<?php
# die Benennung der datei mit inc.php ist optional
include 'includes/datei.inc.php'; # include ist wie import, wirft Fehler wenn eine Funktion aus der datei.inc.php verwendet wird
require 'includes/datei2.inc.php'; # require ist wie include nur wirft es sofort Fehler, wenn es nicht funktioniert
// Alternativen:
// include_once
// require_once

function flaeche ($radius){
    if ($radius >= 0)$erg = M_PI * $radius *$radius;
    else $erg = false;
    return $erg; # mehrere returns sind möglich in einer Funktion, aber keine gute Praxis
}
echo "<br>";
var_dump(flaeche(-10));
echo "ende";

# splat operator?
function summe(...$param){
    var_dump($param);
   echo array_sum($param);
}
summe(1,3,5,7,8,9);

function summe1(){
    var_dump(func_get_args()); # alle Argumente
    $array = func_get_args(); 
    var_dump($array);

    echo func_get_arg(3); # einzelne Argumente
    var_dump($array[3]);
    echo func_num_args(); # Anzahl der Argumente
}
summe1(1,3,5,7,8,9);