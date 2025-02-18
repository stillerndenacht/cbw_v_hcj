<?php

	
	const MWST = 19;
	#define('KONST_1', KONST * 10000);
	
	$var1 = 10;
	
	class Test {
		
		public const MWST = MWST * 2;
		public static $MWST = 'TEST';
		
		private static $var = 'MeiMei';
		
		function test() {
			echo self::MWST;
		}
		
		function getVar() {
			
			
			echo self::$MWST;
			
			self::$MWST = 'Das gilt für alle!!!';
		}
		
		public static function machwas() {
			
			echo self::MWST;
			echo self::$var;
			self::wasAnderes();
		}
		
		public static function wasAnderes() {
			
			echo MWST;
			
		}
		
	}
	
	$c = new Test();
	
	#$c::machwas();
	
	
	
	#echo Test::MWST;
	
	#$obj = new Test();
	
	
	#$obj->test();
	
	#var_dump($obj);
	
	
	class stdMWT {
		
		const WAEHRUNG = ' EUR';
		
		static function euroPreis($preis) {
			
			return number_format($preis,2,',','.')  . self::WAEHRUNG;
		}
		
		static function DEDatum($date) {
			
			return date('d.m.Y', $date);
		}
			
	}
	
	
	
	echo stdMWT::DEDatum(time());
	echo stdMWT::euroPreis(18888);
	

	