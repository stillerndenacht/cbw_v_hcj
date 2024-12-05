<?php
$vari = 10;
echo $varrii + 5; # Ausgabe Warning und 5 - aber der Code wird trotzdem weiter ausgeführt
echo '<br>';
# Lösung Errorreporting aus
error_reporting(0); # 0 schaltet alle Meldungen ab, -1 oder E_ALL alle ein
echo $varrii +15; # Ausgabe 15 (also ohne Berechnung) aber ohne Ausgabe des Errors
echo '<br><br>';

echo 'Löschen von Variablen, bspw. um Platz zu schaffen';
echo '<br>';
$vari_big = "lorem ipsum ................. ........................................... ........................... ........................ ........................................... ......................... ......................... ..............lorem ipsum";
echo $vari_big;
var_dump(isset($vari_big));
echo '<br>';
unset($vari_big);
var_dump(isset($vari_big));
?>