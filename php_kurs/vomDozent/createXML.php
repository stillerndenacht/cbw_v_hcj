<?php

	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');	
	
	$sql = 'SELECT * FROM Freunde';
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$freunde = $stmt->fetchAll();
	
	unset($stmt);				# Brauche ich ab hier nicht mehr :-)
	
	$xml = simplexml_load_string('<freunde />');
	
	/*
	$info = $xml->addChild('info');
	$info->addChild('author', 'MeiMei aus Bargteheide');
	$info->addChild('pubDate', date('d.m.Y H:i:s'));
	*/
	
	foreach($freunde as $freund) {
		
		$neu = $xml->addChild('freund');
		$neu['id'] = $freund['id'];	# $neu->addAttribute('id', $freund['id']);
		$neu->addChild('vorname', $freund['vorname']);
		$neu->addChild('nachname', $freund['nachname']);
		$neu->addChild('info', $freund['info']);
		$neu->addChild('zeit', $freund['zeit']);
		
	}
	
	
	$xml->asXML('text/freunde_erzeugt.xml');
	
	
	
	/*
	$seri = unserialize(file_get_contents('text/freunde_seri.txt'));
	

	
	foreach($seri as $freund) {
		echo $freund['vorname'] . '<br>';
		echo $freund['zeit'] . '<br>';
		echo $freund['nachname'] . '<hr>';
	}
	
	$json = json_decode(file_get_contents('text/freunde_json.txt'));
	
	
	foreach($json as $freund) {
		echo $freund->vorname . '<br>';
		echo $freund->zeit . '<br>';
		echo $freund->nachname . '<hr>';
	}
	
*/
	
	