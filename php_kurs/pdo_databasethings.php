<?php

echo "<h2>---- pdo_databasethings --------</h2>";
# $db = new PDO('mysql:host=localhost;','root','');
# $db = new PDO('mysql:host=localhost; port=3306','root',''); 
# $db = new PDO('mysql:host=localhost; dbname=mysql; port=3306','root','');
# legt eine Datenbank-Verbindung an mit mysql als DB-Management
# (DB-Management, Host=Ort bspw. URL, dbname=mysql(optional), port=3306 der Standardport für mysql(optional), Benutzer (hier root), Passwort (hier leer))
# Ergebnis - leere Seite, keine Fehlermeldung

# Verallgemeinerung:
$host = 'localhost';
$dbname = '';
$port = 3306;
$user = 'root';
$pw = '';
$db = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pw);
var_dump($db); # Ausgabe : object(PDO)#1 (0) { }

echo "<br><br>----- Fehlerbehandlung wenn DB unbekannt. ------<br>";

$dbname = 'UNBEKANNT';
try {
    $db = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pw);
    var_dump($db);
    
} catch (PDOException $e) {
    # echo $e->getMessage();
    die("<br>Diese DB : $dbname existiert nicht"); # stirb - beendet das Programm
}

### Das kann man auch als include-Datei anlegen - siehe includes

// $location->href; # Attribut zur Verlinkung, entspricht location.href in anderen Sprachen
// $db->href