<?php

	function statischeVariable() {
		
		static $x = 0;
		
		$x++;
		
		return $x . '<br>';
		
	}
	
	echo statischeVariable();
	echo statischeVariable();
	echo statischeVariable();
	echo statischeVariable();
	echo statischeVariable();
	echo statischeVariable();
	
	
		
/*
	function test($x) {
	
		
		$x = 'kkkkkk';
		
		echo $x;
		
		$vari = "LOKALE";
		
	}
	
	
	#test($val);
	
	#echo $val;
	
	
	
	
	$globalesTeil = "Globale Variable";					# global
	
	
	function ausgabe() {
		
		global $global;
		#unset($GLOBALS['global']);
		#echo $GLOBALS['global'];
		
		#$global = "Hallo";
		#echo $Global;
		
		
		
	}
	
	ausgabe();
	
	
	echo $global;
	
	var_dump($GLOBALS);
	*/
	
	
	