<?php
	
	$zahl1 = 10;
	$zahl2 = 3;
	$operator = '/';
	
	$ausgabe = '';
	
	if(is_numeric($zahl1) && is_numeric($zahl2)) {
		
		
		$ausgabe = "$zahl1 $operator $zahl2 = ";
		
		switch($operator) {
			
			case '+' : $ausgabe .= $zahl1 + $zahl2; break;
			case '-' : $ausgabe .= $zahl1 - $zahl2; break;
			case '*' : $ausgabe .= $zahl1 * $zahl2; break;
			
			case '/' : if($zahl2 != 0) {
							$ausgabe .= $zahl1 / $zahl2; 
					   } else {
						   $ausgabe .= 'Teilen durch 0 nicht möglich.';
					   }  
					   break;
			
			default: $ausgabe .= 'Unzulässiger Operator!'; break;
		}
		
		
	} else {
		
		$ausgabe = 'Zahl1 und Zahl2 müssen Zahlen sein.';
		
	}
	
	
	
	echo $ausgabe;

