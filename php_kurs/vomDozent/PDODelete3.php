<?php
	
	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	$id = $_GET['id'] ?? false;				# mit isset Prüfung!, wenn id nicht vorhanden = false
	
	if($id !== false AND !empty($id)) {	# Wenn id NICHT false und eine Zahl
	
		$sql = 'DELETE FROM Freunde WHERE id=?';
		$stmt = $db->prepare($sql);
		$stmt->execute([$id]);
	}
	
	
	header('Location: PDOSelectAll.php');
	die;
	
	