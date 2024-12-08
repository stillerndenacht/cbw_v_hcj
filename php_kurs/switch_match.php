<?php

echo "<h2>Switch-Case</h2><br>";
# Funktioniert anlog anderen Sprachen
# ohne break läuft er durch
# auch hier nicht typsensitiv
# Werte die der switch nicht abfängt, werden ignoriert

$wert = 5; # auch "1" und 1.0 werden als 1 gewertet

switch ($wert) {
    case 1:
        echo "ist 1 <br>";
        break;
    case 2:
        echo "ist 2 <br>";
        break;
    case 3:
        echo "ist 3 <br>";
        break; # der letzte break ist optional
    default:
        echo "Egalwert : default Antwort <br>";
        break;
        # das ist was besonderes auch boolean cases sind möglich
    case $wert > 3 && $wert < 10: 
        echo "ist zwischen 3 und 10 <br>";
        break;
}


echo "<h2>Match-Case</h2><br>";
# match case
# Werte die der match nicht abfängt führen zum Programm-Abbruch
# match ist tysensitiv - also wie ===
# das bedeutet aber auch, dass keine Bedingungen ausgewertet werden, Alternative siehe unten
# match hat nur einen Rückgabewert - keine Operationen in der Rückgabe

$erg = match($wert){
    1 => "ist 1 gematched",
    1 => "ist unter 2 gematched",
    2 => "ist 2 gematched",
    3 => "ist 3 gematched",
    default =>"Ausgematched : default Ausgabe",
    4,5,6 => "ist zwischen 3 und 7",
};

echo $erg;

# Alternative match(true)

echo "<h2>Match(true)-Case</h2><br>";

$ergtrue = match(true){
    ($wert >= 0 && $wert < 2) => "match ab 0 und unter 2",
    ($wert >= 2 && $wert < 3) => "match ab 2 und unter 3",
    ($wert >= 3 && $wert < 4) => "match ab 3 und unter 4",
    default => "ist mir egal",
};

echo $ergtrue;
?>