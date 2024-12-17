<?php
	
	#error_reporting (E_ALL & ~ E_WARNING);
	
	require_once 'includes/kreisfunktionen.inc.php';
	
	#echo kreisumfang(10) . '<br>';
	#echo kreisflaeche(10) . '<br>';
		
	#echo "ENDE";
	
	
	
	
	function ausgabe($par, $par2, $par3 = "Dritter") {
		echo "Parameterwert: $par<br>";
		echo "Parameterwert: $par2<br>";
		echo "Parameterwert: $par3<br>";
	}
	
	
	
	
	#ausgabe('test', par3: 3, par2: 2);
	
	

	
	function summe($a, $b, ...$para) {
		
		
		#echo $para[2];
		
	}
	
	summe(1,2,3,4,5);
	
	function summe1() {
		
		$array = func_get_args();
		
		#echo func_num_args();
		
		#echo $array[0];
	}
	
	summe1(1,2,3,4,5);
	
	
	
	
	
	
	
	


	
	
	
	
	
	
	
	
	
	
	
	
	
	

	

	