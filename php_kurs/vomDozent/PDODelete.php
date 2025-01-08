<?php
	
	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	$id = $_GET['id'] ?? false;				# mit isset Prüfung!, wenn id nicht vorhanden = false
	
	if($id !== false AND is_numeric($id)) {	# Wenn id NICHT false und eine Zahl
	
		#echo $id . '<br>';
		$sql = 'DELETE FROM Freunde WHERE id=' . $id;
		#echo $sql;
		$db->query($sql);
	}
	
	# ACHTUNG: Das geht, ist aber MEGA!!!! gefährlich!!!! 
	# Das werden wir ab MORGEN/HEUTE so NIIIIEEEEE machen!!!
	
	header('Location: PDOSelectAll.php');
	die;
	
	