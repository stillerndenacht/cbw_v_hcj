<?php

	include 'includes/PDOConnection.inc.php';
	
	
	#var_dump($db);
	
	$sql = '
DROP DATABASE IF EXISTS FAG312;
CREATE DATABASE FAG312;

USE FAG312;

CREATE TABLE Freunde (
    id INTEGER AUTO_INCREMENT,
    vorname VARCHAR(30) NOT NULL,
	nachname VARCHAR(30),
	info TEXT,
	zeit INTEGER, 
    PRIMARY KEY(id)
);

INSERT INTO Freunde
	(vorname, nachname, info, zeit)
VALUES
	("Manfred Walter", "Thoma", "Langer Text...", ' . time() .'),
	("Reiner", "Korn", "Langer Text...", ' . time() .'),
	("Klara", "Korn", "Langer Text...", ' . time() .'),
	("Paul", "Pansen", "Langer Text...", ' . time() .'),
	("Renate", "Müller", "Langer Text...", ' . time() .'),
	("Klaudia", "Meier", "Langer Text...", ' . time() .');';


#echo $sql;

$db->exec($sql);




	
	
	
	
	
	
	
	
	
	
	
	