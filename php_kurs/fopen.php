<?php
$directory = './';
$datei = fopen('file1_datei.txt', 'r'); #öffnen eines streams - r for read, w write, a append
$dateileer = fopen('fehlt.txt', 'r');
var_dump($dateileer); # bool(false)
var_dump($datei); #  resource(3) of type (stream)
fclose($datei); # was geöffnet wird muss auch wieder geschlossen werden

if ($datei = @fopen('file1_datei.txt', 'r')) {
    var_dump($datei);
    echo "<br>";
    echo fgets($datei) . "<br>"; # fgets() gibt eine Zeile bis Zeilenumbruch aus
    echo fgets($datei) . "<br>";
    echo fgets($datei) . "<br>";
    var_dump(fgets($datei));
    echo "<br>";
    var_dump(fgets($datei));
    echo "<br>";
    var_dump(fgets($datei));
    echo "<br>";
    var_dump(fgets($datei));
    fclose($datei); # dateien die nicht geöffnet werden können auch nicht geschlossen werden
} else {
    echo "ERROR bei fopen()";
}

echo "<br>------ Ausgabe über Schleife -----------<br>";

$count = 0;
$alledateien = [];
if ($datei = @fopen('file1_datei.txt', 'r')) {
    while (($dateiout = fgets($datei)) !== false) {
        echo $dateiout . "<br>";
        $count++;
        $alledateien[] = rtrim($dateiout); # die Zeilen in ein Array schreiben, dabei den carriage return/Zeilenumbruch am Ende entfernen
    }
    fclose($datei); # dateien die nicht geöffnet werden können auch nicht geschlossen werden
} else {
    echo "ERROR bei fopen()";
}
echo "Anzahl Einträge : " . $count;
var_dump($alledateien);

echo "<br>------ Ausgabe mit Parameter byte-Länge -----------<br>";
if ($datei = @fopen('file1_datei.txt', 'r')) {
    # festelegen der Ausleselänge 9 - 1byte (jeder Buchstabe braucht 1 Byte)
    # default ist ... 
    while (($dateiout = fgets($datei, 9)) !== false) {
        $length = strlen($dateiout);
        echo $dateiout . '! : ' . $length . "<br>...<br>";
    }

    fclose($datei);
} else {
    echo "ERROR bei fopen()";
}
#fgetss() - Liest eine Zeile von der Position des Dateizeigers und entfernt HTML Tags.

echo "<br>------ Ausgabe über Schleife bis end of file -----------<br>";
if ($datei = @fopen('file1_datei.txt', 'r')) {
    # feof() - End of File - hier also : solange bis NICHT End of file
    while (!feof($datei)) {
        $dateiout = fgets($datei);
        echo $dateiout . "<br>...<br>";
    }

    fclose($datei);
} else {
    echo "ERROR bei fopen()";
}

# Lesemodi : rb - read as binary

echo "<br>------ Alternative file_get_contents -----------<br>";
var_dump(file_get_contents('file1_datei.txt')); # gibt den gesamten Inhalt als einen String

echo "<br>------ Write bzw. Overwrite -----------<br>";
# Datei öffnen bzw. anlegen - ACHTUNG vorhandene Dateien werden ggf. leer überschrieben
if ($datei = fopen('file2_datei.txt', 'wb')) {
    fwrite($datei, "Ich bin eine neue Datei" . PHP_EOL); # PHP_EOL fügt einen End of Line an bzw. Carriage Return
    fwrite($datei, "Ich bin eine neue zeile" . PHP_EOL);
    fclose($datei);
}
echo "<br>Die angelegten bzw. geänderten Dateien finden sich im Dateiexplorer je nach Pfad-Angabe<br>";

echo "<br>------ Append -----------<br>";
# Anhängen am Ende a - append
if ($datei = fopen('file2_datei.txt', 'ab')) {
    fwrite($datei, "Ich bin eine neur Anhang" . PHP_EOL);
    fwrite($datei, "Ich bin noch ein Anhang" . PHP_EOL);
    fclose($datei);
}
# existiert die Datei nicht .. wird sie neu angelegt
if ($datei = fopen('file3_datei.txt', 'ab')) {
    fwrite($datei, "Ich bin eine neur Anhang" . PHP_EOL); # Rückgabewert von fwrite() ist die Anzahl der geschriebenen Zeichen oder false
    fwrite($datei, "Ich bin noch ein Anhang" . PHP_EOL);
    fclose($datei);
}
echo "<br>Die angelegten bzw. geänderten Dateien finden sich im Dateiexplorer je nach Pfad-Angabe<br>";

#file_put_contents('pfad/zur/datei.txt', 'text oder'. $variable. 'zum text'); # schreibt alles in die Datei
#file_put_contents('pfad/zur/datei.txt', 'text oder'. $variable. 'zum text', FILE_APPEND); # schreibt im Append-Modus
#file_put_contents('pfad/zur/datei.txt', 'text oder'. $variable. 'zum text', FILE_APPEND | LOCK_EX); # LOCK_EX sperrt die Datei exklusiv, solange sie beschrieben wird
echo "<br>------ Öffnen einer Internetquelle -----------<br>";
# was natürlich nicht ungefährlich ist
# deswegen kann man es in der php.ini über: allow_url_fopen=Off auch deaktivieren
if ($datei = @fopen('https://de.wikipedia.org/robots.txt', 'r')) {
    # feof() - End of File - hier also : solange bis NICHT End of file
    while (!feof($datei)) {
        $dateiout = fgets($datei);
        echo $dateiout . "<br>...<br>";
    }

    fclose($datei);
} else {
    echo "ERROR bei fopen()";
}