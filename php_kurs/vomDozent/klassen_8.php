<?php



/*
	abstract class Test {
		
		abstract function getInfo();
		abstract function getInfo1();
		abstract function getInfo2();
		abstract function getInfo3();
		
		
	}
/*
	abstract class Super {
		
		abstract function getInfo();
		abstract function getInfo1();
		abstract function getInfo2();
		abstract function getInfo3();
		
		
	}
	
	
	 class Veit extends Super {
		
		function getInfo() {
			echo __METHOD__;
		}
		
		
	}
	
	
	
	$obj = new Veit();
	$obj->getInfo();
*/



/*
	interface Load {
		
		public function load();
		
		const MWST = 19;
		
	}
	
	interface Save {
		
		public function save();
		
	} 
	
	interface LoadSave extends Load, Save {
		
		function getInfo();
		
	} 
*/

	
	
	#include 'interfaces/Load.inter.php';
	#include 'interfaces/Save.inter.php';
	#include 'interfaces/LoadSave.inter.php';
	
	function autoloader($name) {
		
		$datei = 'classes/' . $name . '.class.php';
		#echo $datei .'<br>';
		if (file_exists($datei)) {
			include_once $datei;
		} 
		
	}
	
	function interfaceloader($name) {
		
		$datei = 'interfaces/' . $name . '.inter.php';
		#echo $datei .'<br>';
		if (file_exists($datei)) {
			include_once $datei;
		} else {
			echo '<p style="color: red">Konnte "' . $name . '" nicht laden.</p>';
			die;
		}
		
	}


	spl_autoload_register('autoloader');
	spl_autoload_register('interfaceloader');
	
	
	class Super implements Load {
		function load(){echo self::MWST;}
	}
		
		
	$obj = new Super();
	$obj->load();	
	


	
	