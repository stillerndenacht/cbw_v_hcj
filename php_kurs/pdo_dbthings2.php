<?php
include 'includes/PDOConnect.inc.php';

echo "<h2>---- pdo_dbthings2 --------</h2>";

$sql = "
DROP DATABASE IF EXISTS FAGPHP; 
CREATE DATABASE FAGPHP; 
USE FAGPHP; 
";
echo $sql."<br>";

$db->exec($sql);


# CREATE TABLE name ( id INTEGER NOT NULL, PRIMARY KEY(id), name VARCHAR (30) ); USE FAGPHP; 

$sql2 = '
DROP TABlE IF EXISTS freunde;
CREATE TABLE freunde ( id INTEGER AUTO_INCREMENT NOT NULL, 
PRIMARY KEY(id), 
vorname VARCHAR (30) NOT NULL,
nachname VARCHAR (30),
info TEXT,
zeit INTEGER);
USE FAGPHP; 
';
echo $sql2."<br>";
$db->exec($sql2);

$sql3 = '
INSERT INTO freunde
    (vorname, nachname, info, zeit)
VALUES 
    ("Reiner", "Wahnsinn", "kommt auch ohne Alkohol aus",'.time().'),
    ("Blanker", "Irrsinn", "kommt selten allein",'.time().'),
    ("Völlige", "Dummheit", "macht das Leben leichter",'.time().'),
    ("Aber", "Vergesslichkeit", "hilft auch",'.time().'),
    ("Hohe", "Intelligenz", "macht nur depressiv",'.time().');
';
echo $sql3."<br>";
# $db->exec($sql3);
var_dump($db->exec($sql3)); # Ausgabe : int(5) - Anzahl der Datensätze auf die sich der Befehl auswirkt

$sql4 = '
DELETE FROM freunde WHERE vorname="Reiner";
';
echo $sql4."<br>";

var_dump($db->exec($sql4));
