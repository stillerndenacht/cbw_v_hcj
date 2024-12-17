<?php 

function lottozahlen_alter() {
		
	$array = range(1, 49);				# Array 1 bis 49		
	shuffle($array);					# Array mischen
	$array = array_slice($array, 0, 6);	# Die ersten 6 Werte als array liefer
	sort($array);						# Sortieren der 6 Werte
	
	return $array;
	
}

function lottozahlen() {

	$ziehung = array();
	
	do {
		
		$zufall = rand(1, 49);
		
		if(!in_array($zufall, $ziehung)) {
			$ziehung[] = $zufall;  # array_push($ziehung, $zufall);
		}
		
	} while(count($ziehung) < 6);
	
	sort($ziehung);
	
	return $ziehung;
	
	
}

function lottozahlen_alter1() {
		
		$array = [];
		
		foreach(array_rand(range(1, 49), 6) as $zahl) $array[] = $zahl;
		sort($array);						
		
		return $array;
		
}