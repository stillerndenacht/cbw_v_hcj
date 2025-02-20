<?php

/*
	class Datum {
		
		public function getDatum() {
			return date('d.m.Y');
		}
		
	}
	
	class Zeit {
		
		public function getZeit() {
			return date('H:i:s');
		}
		
	}
	
	
	interface iDatum {
		public function getDatum();
	}
	
	interface iZeit {
		public function getZeit();
	}

*/
	
		
		
	trait Datum {
		
		public function getDatum() { 
			echo date('d.m.Y');
		}
		
		private function getInfo() {
			echo 'Aus dem Trait ' . __TRAIT__ . '<br>';
		}
		
	}
	
	trait Zeit {
		
		public function getZeit() {
			return date('H:i:s');
		}
		
		public function getInfo() {
			echo 'Aus dem Trait ' . __TRAIT__ . '<br>';
		}
		
	}
	
	
	
	class Neu {
		
		use Datum, Zeit {
				Datum::getInfo insteadof Zeit;
				Datum::getInfo as public;
				Zeit::getInfo as public zeitGetInfo;
			}
		
		
		
	}
	
	
	$o = new Neu ();
	
	
	echo @$o->getInfo() . '<br>';
	echo $o->zeitGetInfo() . '<br>';
	

	
	
	

	