<?php

	include 'includes/PDOConnection.inc.php';
	
	$sql = '
CREATE DATABASE IF NOT EXISTS FAG312;

USE FAG312;

DROP TABLE IF EXISTS Admins;

CREATE TABLE Admins (
    name VARCHAR(30),
    pwd VARCHAR(255),
    PRIMARY KEY(name)
);

INSERT INTO Admins
	(name, pwd)
VALUES
	("master","' . password_hash('geheim', PASSWORD_DEFAULT) .'");
';


#echo $sql;

$db->exec($sql);