<?php
	
	$wert = 19;
	
/*
	if($wert == 1 ) {
		
		echo 'Ist 1 <br>';
		
		
	} elseif($wert == 2) {
			
		echo 'Ist 2<br>';
			
	} elseif($wert == 3) {
		echo 'Ist 3<br>';
	}
	
*/	
	
	# E
	$wert = 23;
	
	$ausgabe = "";
	
	# V
	switch($wert) {
		
		
		case $wert >= 1 && $wert <= 10 : 
					$ausgabe = 'Ist 1 bis 10<br>';
					break;
					
		case $wert > 10 && $wert <= 20  :
					$ausgabe = 'Ist 11 bis 20<br>';
					break;
		
		case $wert > 20 && $wert <= 30  :
					$ausgabe = 'Ist 21 bis 30<br>';
					break;
					
		default :	$ausgabe = 'PROBLEM<br>';
					break;
					
	}

	# A
	#echo $ausgabe;
	
	$wert = 7;
	
	
	
	$erg = match(true) {
		($wert >= 1 && $wert <= 10) =>  "Ist 1",
		($wert > 10 && $wert <= 20) =>  "Ist 2",
		($wert > 20)  =>  "Ist 3",
		default => "DEFAULT"
		};
	
	echo $erg;
	
	echo  match($wert) {
		1 =>  "Ist 1"),
		2 =>  "Ist 2",
		3,4,5,7,10  =>  "Ist 3",
		default => "DEFAULT"
		};
	

	
	
?>

	