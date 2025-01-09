<?php

	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	$id = 2;
	
	$array = array(2,"Klaus");
	
	$sql = 'SELECT * FROM Freunde WHERE id=? OR vorname=?';
	
	$stmt = $db->prepare($sql);
	
	#$stmt->execute($array);
	
	#var_dump($stmt->fetch());
	
	
	
	
	$sql = 'SELECT * FROM Freunde WHERE id=:id OR vorname=:vn';
	
	$stmt = $db->prepare($sql);
	
	
	$array = array('vn' => "Klaus", 'id' => 2);
	
	#$stmt->execute($array);
	
	#var_dump($stmt->fetch());
	
	
	$sql = 'INSERT INTO Freunde (vorname, nachname, info, zeit) VALUES (?, ?, ? ,?)';
	
	$stmt = $db->prepare($sql);
	
	#$stmt->execute(['1Neu VN', '1Neu NN', 'Info', time()]);
	#$stmt->execute(['2Neu VN', '2Neu NN', 'Info', time()]);
	#$stmt->execute(['3Neu VN', '3Neu NN', 'Info', time()]);
	
	
	
	$sql = 'SELECT * FROM Freunde WHERE id=:id';
	
	$stmt = $db->prepare($sql);
	
	$id = 4;
	
	$stmt->bindParam('id', $id);
	$stmt->execute();
	
	#var_dump($stmt->fetch());
	
	
	$id = 5;
	
	$stmt->execute();
	
	#var_dump($stmt->fetch());
	