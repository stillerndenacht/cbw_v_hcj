<?php

	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	
	function load($file = 'text/freunde_seri.txt') {
		
		$array = [];
		
		if(file_exists($file)) {
			$array = unserialize(file_get_contents($file));
		}
		
		return $array;
	}
	
	
	function save($array, $file = 'text/freunde_seri.txt') {
		
		file_put_contents($file, serialize($array)); 
		
	}
	
	
	function addFreund(&$array, $vn, $nn) {
		
		$array[] = array('vorname' => $vn, 'nachname' => $nn, 'zeit' => time());
		save($array);
		
	}
	
	
	# EXPORT -------------------------------------------------------
	#$sql = 'SELECT vorname, nachname, zeit FROM Freunde';
	#$stmt = $db->query($sql);
	#$freunde = $stmt->fetchAll();
	
	
	#file_put_contents('text/freunde_seri.txt', serialize($freunde)); 
	# -------------------------------------------------------
	

	$freunde = load();
	
	#addFreund($freunde, 'Hallo', 'Welt');
	
	foreach($freunde as $freund) {
		echo $freund['vorname'] . ' ' . $freund['nachname'] . ' ' . 
		     date('d.m.Y H:i:s', $freund['zeit']) . '<br>';
	}
	
	#$freunde[0]['vorname'] = '------------';
	#save($freunde);
	
	
	
	
	
	
	
	#$freunde = unserialize(file_get_contents('text/freunde_seri.txt'));

	#var_dump($freunde);
	
/*
	foreach($freunde as $freund) {
		
		echo $freund['vorname'] . ' ' . $freund['nachname'] . ' ' . 
		     date('d.m.Y H:i:s', $freund['zeit']) . '<br>';
	}
	
	$freunde[] = ['vorname' => 'VN', 'nachname' => 'NN', 'zeit' => time()];
	
	#var_dump($freunde);
	
	#file_put_contents('text/freunde_seri.txt', serialize($freunde));

	
	#$freunde = load();
	
	#foreach($freunde as $freund) {
		
		#echo $freund['vorname'] . ' ' . $freund['nachname'] . ' ' . 
	#	     date('d.m.Y H:i:s', $freund['zeit']) . '<br>';
	#}
	
	
	
	
	#$freunde[] = ['vorname' => 'Rita', 'nachname' => 'Meier', 'zeit' => time()];
	
	#addFreund($freunde, 'xxx', 'yyy');
	#var_dump($freunde);
	
	
	#save($freunde);
	
*/
	