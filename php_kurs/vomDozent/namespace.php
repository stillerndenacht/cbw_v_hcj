<?php
	
	
	include 'includes/namespace_1.inc.php';
	include 'includes/namespace_2.inc.php';
	
	
	const KONSTANTE = 'Konstante von Manfred';
	
	
	function ichBin() {
	
		echo 'Ich bin Manfred.<br>';
		echo __FUNCTION__ . '<br>';
		
	}
	
	use meimei as m;
	use veit\demo\programm\test as v;
	use meimei\Klasse;
	#use veit\demo\programm\test\Klasse as veitKlasse;
	
	#echo KONSTANTE .'<br>';
	#echo m\KONSTANTE . '<br>';
	#echo v\KONSTANTE . '<br>';
	
	#chBin();
	meimei\test\ichBin();
	#v\ichBin();
	
	$x = new Klasse;
	
	
	
	
