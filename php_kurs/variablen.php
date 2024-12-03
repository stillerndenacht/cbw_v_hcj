<!-- vorher muss man natürlich den xampp Apache starten damit php läuft und dann über http://localhost:8080/hcj_cbw/php_kurs/   bzw. http://localhost:8080/hcj_cbw/php_kurs/test.php diese Datei im Browser aufrufen -->
<?php $seitentitel = 'Variablen und Typkonvertierung etc.' ?>
<?php
$var = "1. Variable";
$var2 = 34; # Ganzzahl immer 8 Bytes lang = Java Long
$var3 = 34.; # Float immer 8 Bytes lang = Java Double
$bool = true;
const KONST = 10; # Konstanten müssen direkt bei der Deklaration initialisiert werden
$array = [];
$array2 = array();
$null = NULL;
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo "$seitentitel" ?></title>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <article>
        <?php
        echo "Hier php Code. $var <br>"; # in Double Quotes wird die Variable interpretiert
        ?>
        <?php
        echo 'Hier php Code. $var <br>'; # in Single Quotes wird die Variable nicht interpretiert

        var_dump($var); # Ausgabe des Datentyps und Wertes
        echo '<br>'; # html Tags werden als solche interpretiert und ausgegeben
        var_dump($var2);
        echo '<br>';
        var_dump($var3);
        echo '<br>';
        var_dump($bool);
        echo '<br>';
        var_dump(KONST);
        echo '<br>';
        var_dump($array);
        echo '<br>';
        var_dump($array2);
        echo '<br>';
        var_dump($null); # Ausgabe NULL - ist also ein eigener Datentyp
        echo '<br><br>';

        echo '<h3>php ist nicht streng typisiert - Typen können leicht wechseln </h3><br>';
        $var = 12;
        var_dump($var);
        echo '<br>';
        echo '<br><br>';

        echo '<h3>gettype() gibt den Datentyp als String aus </h3><br>';
        echo (gettype($var)); # Ausgabe "integer"
        echo '<br>';
        echo (gettype(gettype($var))); # Ausgabe "string"
        echo '<br>';

        echo '<h3>Autocasting/ implizites Casting von Strings </h3><br>';
        $stringzahl = '300';
        var_dump($stringzahl);
        echo '<br>';
        echo (gettype($stringzahl));
        echo '<br>';
        echo $stringzahl * 3; # wird gecastet auf integer Ausgabe 900
        echo '<br><br>';

        echo '<h3>Autocasting/ implizites Casting von Strings in seltsam</h3> <br>';
        $stringzahl2 = '300 Äpfel';
        $stringzahl3 = '2 Birnen 5 Bananen';
        var_dump($stringzahl2);
        echo '<br>';
        var_dump($stringzahl3);
        echo '<br>';
        echo (gettype($stringzahl2));
        echo '<br>';
        echo $stringzahl2 + $stringzahl3; # wird gecastet, wenn es mit einer Zahl anfängt bis ein Character kommt -- aber gibt auch eine WARNING aus
        echo '<br>';
        echo $stringzahl2 . $stringzahl3; # Concatenation/ Verknüpfung mit .
        echo '<br><br>';

        echo '<h3>Call by Value vs. Call by Reference</h3>';
        echo '<br>';
        $origin = "Original";
        $origin2 = $origin; # Kopie vom Original wird angelegt
        echo $origin . ' und ' . $origin2;
        echo '<br>';
        $origin2 = 'keine_Kopie_mehr'; # nur die Kopie wird geändert
        echo $origin . ' und ' . $origin2;
        echo '<br>';
        $origin3 = &$origin2; # Verweis auf die Referenz
        echo $origin . ' und ' . $origin2 . ' und ' . $origin3;
        echo '<br>';
        $origin3 = 'die_Referenz_wurde_geändert'; # auch das Original der Referenz wird mit geändert (gleiche Speicheradresse)
        echo $origin . ' und ' . $origin2 . ' und ' . $origin3;
        echo '<br>';

        echo '<br><br>';
        ?>
    </article>
</body>

</html>