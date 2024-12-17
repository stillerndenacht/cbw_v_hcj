<?php

	
	function kreisumfang($radius) {
		
		if($radius >= 0 ) 
			$erg = 2 * pi() * $radius;
		else
			$erg = false ;
		
		return $erg;
		
	}
	
	function kreisflaeche($radius) {
		
		
		if($radius >= 0 ) 
			$erg = M_PI * $radius * $radius;
		else
			$erg = false ;
		
		return $erg;
		
	}

	

?>