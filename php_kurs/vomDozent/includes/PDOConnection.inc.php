<?php

	$host 		= 'localhost';
	$port 		= '3306';
	$dbname 	= '';
	$user 		= 'root';
	$pwd  		= '';
	
	$options = array();
	
	
	try {
		$db = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pwd, $options);
	} catch(PDOException $e) {
		#echo $e->getMessage();
		die('<br>Leider ist der DB-Server nicht erreichbar');
	}
	
	
	
	
	
	
	
	
	