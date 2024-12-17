<?php
	
	#error_reporting (E_ALL & ~ E_WARNING);
	
	require_once 'includes/kreisfunktionen.inc.php';
	
	#echo kreisumfang(10) . '<br>';
	#echo kreisflaeche(10) . '<br>';
		
	#echo "ENDE";
	
	
	
	$array = [1,2,3,4,5,];
	
	$value = 10;
	
	function test(&$par) {
		
		$par[0] = 'Hallo';
		
		$par = 10;
		
		
	}
	
	

	test($array);
	
	var_dump($array);
	

	echo 1 + print('Hallo');
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	

	