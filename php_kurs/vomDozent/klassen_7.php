<?php

	
	abstract class Fahrzeug {
		
		private $kennzeichen = '';
		private $gestellNr = '';
		
		public function __construct($kenn, $gestell) {
			
			$this->setKennzeichen($kenn);
			$this->setGestellNr($gestell);
	
		}
		
		public function getKennzeichen() {
			return $this->kennzeichen;
		}
		
		public function setKennzeichen($kenn) {
			$this->kennzeichen = $kenn;
		}
		
		public function getGestellNr() {
			return $this->gestellNr;
		}
		
		public function setGestellNr($gestell) {
			$this->gestellNr = $gestell;
		}
			
		public function getInfo() {
			return 'Kennzeichen: ' . $this->getKennzeichen() . '<br>' .
				   'GestellNr.: ' . $this->getGestellNr() . '<br>';
		}
		
	}
	
	class PKW extends Fahrzeug {
		
		private $sitze = 0;
		
		public function __construct($kenn, $gestell, $sitze) {
			
			parent::__construct($kenn, $gestell);
			$this->setSitze($sitze);
	
		}
		
		public function getSitze() {
			return $this->sitze;
		}
		
		public function setSitze($sitze) {
			$this->sitze = $sitze;
		}
		
		public function getInfo() {
			
			return __CLASS__ . '<br>' . parent::getInfo() . 
			       'Sitze: ' . $this->getSitze() . '<hr>';
		}
		
	}
	
	class LKW extends Fahrzeug {
		
		private $zuladung = 0;
		
		public function __construct($kenn, $gestell, $zuladung) {
			
			parent::__construct($kenn, $gestell);
			$this->setZuladung($zuladung);
		}
				
		public function getZuladung() {
			return $this->zuladung;
		}
		
		public function setZuladung($zuladung) {
			$this->zuladung = $zuladung;
		}

		public function getInfo() {
			return __CLASS__ . '<br>' . parent::getInfo() .
				'Zuladung: ' . $this->getZuladung() . ' t<hr>';
		}
		

	}
	
	class Unternehmen {
		
		private $name = "SIXT";
		private $fahrzeuge = [];
		private $filename = 'text/sixt.seri';
		
		public function __construct () {
			$this->load();
		}
	
		public function neuesFahrzeug(Fahrzeug $fahrzeug) {
			$this->fahrzeuge[] = $fahrzeug;
			$this->save();
		}
		
		public function getFahrzeuge() {
			return $this->fahrzeuge;
		}
		
		
		# ---------------------------------------------
		# SCHLECTE LÖSUNG :-)
		# ---------------------------------------------
		
			/*
		public function getPKWs() { 
		
			$erg = [];
			foreach($this->getFahrzeuge() as $fahrzeug) :
				if($fahrzeug instanceOf PKW) $erg[] = $fahrzeug;
			endforeach;
			return $erg;
			
		}
	
		public function getLKWs() {
			
			$erg = [];
			foreach($this->getFahrzeuge() as $fahrzeug) :
				if($fahrzeug instanceOf LKW) $erg[] = $fahrzeug;
			endforeach;
			return $erg;
		}
		
		*/
		
		# ---------------------------------------------
		# BESSER???
		# ---------------------------------------------
		
		public function getTyp($typ = 'PKW') {
			
			# Bitte noch Fehlerbehandlung :-)
			$erg = [];
			foreach($this->getFahrzeuge() as $fahrzeug) :
				if($fahrzeug instanceOf $typ) $erg[] = $fahrzeug;
			endforeach;
			return $erg;
		}
		
		# ---------------------------------------------
		
		protected function save() {
	
			$dir = pathinfo($this->filename, PATHINFO_DIRNAME);
			if(!file_exists($dir)) { mkdir($dir); }
			
			@file_put_contents($this->filename, serialize($this->fahrzeuge));
	
		}

		protected function load() {
		
			if($seri = @file_get_contents($this->filename)) {
				$this->fahrzeuge = unserialize($seri);
			} 
		
		}

	}
	
	
	$sixt = new Unternehmen();
	
	#$sixt->neuesFahrzeug(new PKW('OD-AA-431', '1898', 5));
	
	
	foreach($sixt->getFahrzeuge() as $fahrzeug) {echo $fahrzeug->getInfo();}

	
