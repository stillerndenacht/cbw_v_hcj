<?php
echo "--------- dateioperationen 2 ------------<br>";
# echo `dir`; # führt ein Kommando auf der Shell aus, hier Anzeige des Verzeichnisinhalt
# echo shell_exec("dir"); # macht das gleiche nur besser zu lesen
# shell Kommandos sind Betriebssystemabhängig

$path = "uploads/images/"; # besser lesbar, dass hier ein ein Verzeichnis gemeint ist durch /
var_dump(is_dir($path));
echo "<br>";

$path = __DIR__; # gibt immer den vollständigen Pfad vom aktuellen Verzeichnis zum Betriebssystem-root - C:\xampp\htdocs\hcj_cbw\php_kurs
echo $path;
echo "<br>";
echo __LINE__; # gibt die Zeile im Script aus
echo "<br>";
echo __FILE__; # gibt den Pfad der Datei bis Betriebssystem-root aus - C:\xampp\htdocs\hcj_cbw\php_kurs\dateioperationen2.php
echo "<br>";
var_dump(is_dir($path));
echo "<br>";

$path = '.'; # das aktuelle Verzeichnis
$path = './'; # das aktuelle Verzeichnis
$path = "uploads/txt/";
echo "<br>";
if (is_dir($path)) {
    $dir = opendir($path);
} # öffnet einen Stream auf den Ordner, er muss zwingend wieder geschlossen werden
var_dump($dir); # resource(3) of type (stream)
echo "<br>";
echo "auslesen des Directory<br>";
# ACHTUNG!!! jedes readdir() verschiebt den Lese-Curser weiter (also auch das var_dump zwischendrin), deswegen muss man die Ausgabe, wenn man sie benutzen will direkt in eine Variable schreiben
echo readdir($dir) . "<br>"; # Ausgabe: .
echo readdir($dir) . "<br>"; # Ausgabe: ..
#var_dump(readdir($dir));
echo readdir($dir) . "<br>"; # Ausgabe: file_upload_testfile copy.txt
echo readdir($dir) . "<br>"; # Ausgabe: file_upload_testfile.txt
echo readdir($dir) . "<br>"; # Ausgabe: nix mehr... weil alles ausgelesen

var_dump(readdir($dir));
closedir($dir); # schließt den Stream auf den Ordner

#Öffnen und Auslesen über eine Schleife
echo "<br>---- Öffnen und Auslesen über eine Schleife ----<br>";
if (is_dir($path)) {
    $dir = opendir($path);
}

while (($read = readdir($dir)) !== false) {
    echo $read . "<br>";
}
closedir($dir);

# das gleiche mit objektorientierten Methoden
echo "<br>---- das gleiche mit objektorientierten Methoden ----<br>";
if (is_dir($path)) {
    $dir = dir($path);
}

while (($read = $dir->read()) !== false) {
    echo $read . "<br>";
}
$dir->close();

# einen Array aus den Dateien/Ordnern bauen objektorientierten Methoden
echo "<br>---- einen Array aus den Dateien/Ordnern bauen objektorientierten Methoden ----<br>";
if (is_dir($path)) {
    $dir = dir($path);


while (($read = $dir->read()) !== false) {
    echo $read . "<br>";
    $array[]=$read;
}
var_dump($array);
$dir->close();}

echo "<br><br>---- scandir() ----<br>";
var_dump(scandir($path));
echo "<br><br>";
var_dump(scandir($path, 1));
echo "<br><br>";
var_dump(scandir($path, 0));


echo "<br><br>---- glob ----<br>";
var_dump(glob('*.*')); # gibt alle Dateien ohne Verzeichnisse aus diesem Verzeichnis
echo "<br><br>";
var_dump(glob('*')); # alles, auch Verzeichnisse
echo "<br><br>";
var_dump(glob('*',GLOB_ONLYDIR)); # alle Verzeichnisse
echo "<br><br>";
var_dump(glob('*.jpg'));
echo "<br><br>";
var_dump(glob('uploads/txt/*.*'));
echo "<br><br><br>";
var_dump(glob('uploads/*.{txt,jpg}', GLOB_BRACE)); # nur txt und jpg, ACHTUNG kein Leerzeichen zwischen den Datei-Endungen
