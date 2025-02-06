<?php


	session_start();
	
	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	$stmt = $db->query('SELECT * FROM Admins ORDER BY name');
	$admins = $stmt->fetchAll();
	
	$xml = @simplexml_load_string('<admins/>');
	
	foreach($admins as $admin) {
		$kind = $xml->addChild('admin');
		$kind->addChild('name', $admin['name']);
		$kind->addChild('pwd', $admin['pwd']);
	}
	
	$xml->asXML('text/adminXML.xml');

	echo "Siehe Datei <b>text/adminXML.xml</b>";