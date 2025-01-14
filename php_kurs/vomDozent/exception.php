<?php

/*
	try {
		
		throw new Exception();
		
	} catch(Exception $e) {
		# Fangen eine EXCEPTION
		var_dump($e);
		
	}
	
	
	#echo 'Weiter';
	*/
	
	class ZugrossException extends Exception {}
	
	
	function division($z1, $z2) {
	
		if($z2 > 1000) throw new ZugrossException();
		if($z2 == 0) throw new Exception('Durch 0');
		return $z1 / $z2;
		
	}
	
	try {
		
		try {
			
			$x = division(10,0);
			
			echo $x;
			
		} catch(ZugrossException $e) {
			
			echo 'Catch für ZugroßException!!!! => ClassName: ';
			echo get_class($e) . '<br>';
			#echo $e->getMessage() . '<br>';
			
			throw $e;
			
		} catch(Exception $e) {
			
			echo 'Catch für Exception!!!! => ClassName: ';
			echo get_class($e) . '<br>';
			#echo $e->getMessage() . '<br>';
			
			throw $e;
			
		} finally {
			echo "<br>Erstes Finally";
		}
		
	} catch (Exception $e) {
		
		echo "<br>Zweites Catch<br>";
		echo get_class($e);
		
	} finally {
		echo "<br>Zweites Finally";
	}
	

	
	

	
	
	