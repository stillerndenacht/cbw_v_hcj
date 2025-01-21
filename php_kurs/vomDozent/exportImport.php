<?php

	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	
	# EXPORT -------------------------------------------------------
	$sql = 'SELECT id, vorname, nachname, zeit FROM Freunde';
	$stmt = $db->query($sql);
	$freunde = $stmt->fetchAll();
	
	$export = '';
	
	foreach($freunde as $freund) 
		$export .= $freund['vorname'] . '|' . $freund['nachname'] . 
		           '|' . $freund['zeit'] . '|' . $freund['id'] . PHP_EOL;
		
	file_put_contents('text/freunde.txt', trim($export));  # Hab hier gleich mal geTRIMt :-)

	# IMPORT -------------------------------------------------------
	
	$arrFreunde = explode(PHP_EOL, file_get_contents('text/freunde.txt'));

	foreach($arrFreunde as $strFreund) {
		$arrFreund = explode('|', $strFreund);
		echo $arrFreund[0] . ' ' . $arrFreund[1] . ' ' . 
		     date('d.m.Y H:i:s', $arrFreund[2]) . '<br>';
	}
	