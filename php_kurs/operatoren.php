<?php
var_dump(1 == true); # true
echo '<br>';
var_dump(384 == true); #true - jede Number außer 0 wird als true interpretiert
echo '<br>';
var_dump(0 == true); #false
echo '<br>';
var_dump( !1 == false); # true
echo '<br>';
var_dump( !567.08 == false); # true - jedes NOT Number außer 0 wird als false interpretiert
echo '<br>';
var_dump( !0 == false); # false
echo '<br>';
var_dump('Hallo' == true); #true
echo '<br>';
var_dump('' == true); #false
echo '<br>';
var_dump('0' == true); #false
echo '<br><br>';

echo 'Spaceship-Operator kleiner oder gleich oder größer';
$a = 1;
$b = 5;
$c = 5;
$d = 10;
echo '<br>';
var_dump ($b <=> $c); # bei Gleichheit: Ausgabe 0 : es gilt =
echo '<br>';
var_dump ($a <=> $b); # ist der 1. Wert kleiner/der letzte größer: Ausgabe -1 : es gilt <
echo '<br>';
var_dump ($d <=> $b); # ist der letzte Wert kleiner/ der 1. kleiner: Ausgabe 1 : es gilt >
echo '<br>';


?>