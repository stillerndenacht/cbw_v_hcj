<?php


	class Computer {
		
		public static function klasse() {
			
			return __CLASS__;
		}

		public static function starten() {
			return static::klasse() . " ist gestartet.";
		}
		
	}


	class Laptop extends Computer {
		
		public static function klasse() {
			return __CLASS__;
		}
		
		
	}
	
	class Pad extends Laptop {
		
		public static function klasse() {
			return __CLASS__;
		}
		
		
	}
	
	
	
	
	echo Pad::starten();