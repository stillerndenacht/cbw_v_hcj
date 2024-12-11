<?php
$arr0 = array(); # ein leeres array
$arr = array(1, 2, 3);
var_dump($arr); # Ausgabe: array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) } 
echo "<br>";
echo count($arr); # zählt die Elemente
echo "<br>";
echo $arr; # das geht nicht - gibt eine Warning und Datentyp als String
echo "<br>";
print_r($arr); # Ausgabe: Array ( [0] => 1 [1] => 2 [2] => 3 ) 
echo "<br>";
echo isset($arr[1]); # Ausgabe: 1
echo "<br>";
var_dump(isset($arr[1])); # Ausgabe: bool(true)
echo "<br>";
unset($arr[1]); # löscht das Element key 1
var_dump(($arr)); #array(2) { [0]=> int(1) [2]=> int(3) }
echo "<br>";
$arr[1] = 5; # setzt ein Element aber hängt es hinten an
$arr[5] = 6; # auch größere indizes können gesetzt werden
$arr[] = 8; # hängt automatisch hinten an mit nächsthöherem key
var_dump($arr);
echo "<br>";

$arr2 = [4, 5, 6, 7]; # so kann man auch deklarieren
var_dump($arr2);
echo "<br>";
for ($i = 0; $i < count($arr2); $i++) {
    echo $arr2[$i] . "<br>";
}

$arr3 = array(0 => "A", 1 => "B", 5 => "C", "D", 3 => "x", 1 => "E"); # doppelte keys werden direkt überschrieben
var_dump($arr3);
echo "<br>";

# um hier durch zu loopen braucht man foreach wobei $key $value beliebig sind
foreach ($arr3 as $key => $value) {
    echo "$key : $value <br>";
}
# so gibt es nur die Values
foreach ($arr3 as $value) {
    echo "Value : $value <br>";
}
# nur keys abrufen geht nicht, aber man kann nur die keys ausgeben
foreach ($arr3 as $key => $value) {
    echo "$key <br>";
}

$arr4 = array("1" =>"A", 1=>"B", true=>"C" ); # werden alle als 1 gelesen und deswegen überschreiben sie sich
var_dump($arr4); #Ausgabe: array(1) { [1]=> string(1) "C" } 
echo "<br>";
# auch arrays oder Objekte passen in arrays
$arr5 = array("a", "b", "c", $arr6 = ["x","y","z", "zz"]);
var_dump($arr5);
echo "<br>";
print_r($arr5);
echo "<br>";
var_dump($arr6); # ich kann sogar so auf das innere array zugreifen
echo "<br>";
foreach ($arr5 as $key => $value) {
    echo "$key : $value <br>";
}
foreach ($arr6 as $key => $value) {
    echo "$key : $value <br>";
}

var_dump(is_array($arr5[3])); # Ausgabe bool(true)
echo "<br>";
echo count($arr5,1); # der innere Array wird mit gezählt
echo "<br>";         # also Elemente arr5 = 4 + Elemente arr6 = 4
echo count($arr5,0); # das ist der normale Modus
echo "<br>";
echo count($arr5,COUNT_RECURSIVE);
echo "<br>";
echo count($arr5,COUNT_NORMAL);
echo "<br>";
var_dump (isset($arr5));
echo "<br>";
var_dump (empty($arr6));
echo "<br>";
var_dump ((bool)$arr6); # alles was nicht 0 ist ist true, deswegen Ausgabe : bool(true) 
echo "<br>";
$arr7 = [2,3,4,5,6,7,8,9];
print_r($arr7);
echo "<br>";
$popout = array_pop($arr7);
echo $popout;
echo "<br>";
print_r($arr7);
echo "<br>";
$pushin = array_push($arr7,10);
echo $pushin;
echo "<br>";
print_r($arr7);
echo "<br>";
$shiftout = array_shift($arr7); # entfernt das erste Element und reindiziert den kompletten Array
# shift ist nur für numeric keys ein Problem
echo $shiftout;
print_r($arr7);
echo "<br>";


$arr8 = ["0"=>"a","3"=>"b","C"=>"c","6"=>"d","8"=>"e"];
print_r($arr8);
echo "<br>";
$shiftout = array_shift($arr8);
var_dump($shiftout);
print_r($arr8);
echo "<br>";

$shiftin = array_unshift($arr8, "x");
var_dump($shiftin);
print_r($arr8);
echo "<br> slice <br>";
# array_slice()
$arr9 = array_slice($arr8, 2,5); # liefert einen Ausschnitt des arrays als neues Array vergibt neue numerische Indizes
print_r($arr9);
$arr10 = array_slice($arr8, -2, 2);
echo "<br>";
print_r($arr10);
echo "<br>";
print_r($arr8);
echo "<br>";

var_dump(in_array("b",$arr8));
var_dump(in_array("b",$arr9));
echo "<br>";






#array_splice(); # ersetzt einen oder mehrere Werte(mehrere als Array einfügen)

#array_merge(); # hängt zwei Arrays aneinander in ein neues Array und indiziert ggf. neu
#arr1 + arr2 ; # Vereinigung - nur Indizes die in arr1 nicht vorhanden sind werden eingefügt
#array_combine(); # kombiniert zwei Arrays als Key(array) und Value(array) in einen Array zu key-Value
echo "<br> range <br>";
print_r(range(1, 30, 3)); # erzeugt ein Array (Startwert, Endwert, Schrittweite)

echo "<br> fill <br>";
$fillarr = array_fill(0,10,"default"); # Erzeugt ein Array (Startwert, Endwert, Wert)
print_r($fillarr);

var_dump(array_key_exists(1,$fillarr));
#isset

var_dump(array_search("default", $fillarr)); # sucht einen Value und liefert den key
#array_flip($arr); # tauscht key gegen value

// sort(); # sortiert nach Values
// rsort(); # sortiert nach Values rückwärts
// ksort(); # sortiert nach keys
// krsort(); # sortiert nach keys rückwärts
// asort(); # sortiert nach Values ohne die keys zu ändern
// arsort(); # sortiert nach Values ohne keys zu ändern rückwärts
