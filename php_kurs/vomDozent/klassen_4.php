<?php

	/*
	function __autoload($name) { 
	
		$datei = 'classes/' . $name . '.class.php';
		echo $datei .'<br>';
		if (file_exists($datei)) {
			include_once $datei;
		} else {
			echo '<p style="color: red">Konnte Klasse "' . $name . '" nicht laden.</p>';
			die;
		}
	}
	*/
	
	
	function autoloader($name) {
		
		$datei = 'classes/' . $name . '.class.php';
		#echo $datei .'<br>';
		if (file_exists($datei)) {
			include_once $datei;
		} else {
			echo '<p style="color: red">Konnte Klasse "' . $name . '" nicht laden.</p>';
			die;
		}
		
	}

	
	spl_autoload_register('autoloader');
	
	
	
	$firma = new Unternehmen('test');
	var_dump($firma);
	
