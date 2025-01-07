<?php

	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	
	$id = $_GET['id'];
	
	# ist überhaput die id gesendet
	# wenn id gesendest, ist der Wert brauchbar
	# gibt es die id mit dem wert überhaput
				
	$sql = 'SELECT * FROM Freunde WHERE id=' . $id;
	
	#echo $sql;
	
	
	
	$stmt = $db->query($sql);
	
	$freund = $stmt->fetch();
	
	var_dump($freund);
	