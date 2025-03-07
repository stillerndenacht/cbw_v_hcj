<?php

	include '../includes/PDOConnection.inc.php';
	
	
	#var_dump($db);
	
	$text = 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.';
	
	$sql = '

USE FAG312;

DROP TABLE IF EXISTS BlogItems;

CREATE TABLE BlogItems (
    id INTEGER AUTO_INCREMENT,
    subject VARCHAR(80) NOT NULL,
	body TEXT,
	isFree BOOLEAN DEFAULT false,
	createDate INTEGER DEFAULT 0,
	viewCount INTEGER DEFAULT 0,
	voteCount INTEGER DEFAULT 0, 
	voteSum INTEGER DEFAULT 0,
    PRIMARY KEY(id)
);

INSERT INTO BlogItems
	(subject, body, createDate, isfree)
VALUES
	("Subject-Titel ' . rand(10000, 99999) .'", "' . $text .  '", ' . time() .', true),
	("Subject-Titel ' . rand(10000, 99999) .'", "' . $text .    '", ' . time() .', false),
	("Subject-Titel ' . rand(10000, 99999) .'", "' . $text .    '", ' . time() .', true),
	("Subject-Titel ' . rand(10000, 99999) .'", "' . $text .    '", ' . time() .', false),
	("Subject-Titel ' . rand(10000, 99999) .'", "' . $text .    '", ' . time() .', true),
	("Subject-Titel ' . rand(10000, 99999) .'", "' . $text .    '", ' . time() .', false)
	
';


echo $sql;

$db->exec($sql);




	
	
	
	
	
	
	
	
	
	
	
	