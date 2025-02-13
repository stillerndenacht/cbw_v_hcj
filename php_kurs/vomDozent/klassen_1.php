<?php
	

	#declare(strict_types=1);
	
	class Kontakt {
		
		public $mobil = 'MOB';
		public $tel = 'TEL';
		public $fax = 'FAX';
		
		public function __construct($mobil='', $tel = '', $fax = '') {
			$this->mobil = $mobil;
			$this->tel = $tel;
			$this->fax = $fax;
			
		}
		
	}
	
	class Anschrift {
		
		public $plz = 'PLZ';
		public $ort = 'ORT';
		public $str = 'STR';
		public $kontakt = null;
		
		public function __construct($plz = '', $ort = '', $str = '') {
			
			$this->plz = $plz;
			$this->ort = $ort;
			$this->str = $str;
			$this->kontakt = new Kontakt();
			
		}
		
	}
	
	
	class Person {
		
		private $vname = '';
		private $anschrift = null;
		
		
		public function __construct($vname, $plz = '', $ort = '', $str = '') {
			$this->anschrift = new Anschrift($plz, $ort, $str);
			$this->vname = $vname;
		}
		
		public function getVname() {
			
			return $this->vname;
			
		}
		
		public function setVname($vname) {
		
			$this->vname = trim($vname);
			
		}
	
	
		public function getAnschriftString() {
		
			return $this->anschrift->plz . ' ' . $this->anschrift->ort . '<br>' .
			       $this->anschrift->str;
			
		}
		
		public function getAnschriftObj() {
			return $this->anschrift;
		}
		
		public function setAnschriftString($plz, $ort, $str) {
		
			$this->anschrift->plz = $plz;
			$this->anschrift->ort = $ort;
			$this->anschrift->str = $str;
			
		}
		
		public function setAnschriftObj($anschrift) {
		
			# Das ist hier so leider doof!
			$this->anschrift = $anschrift;
			
		}
		
		
		public function getKontaktString() {
		
			return $this->anschrift->kontakt->mobil  . '<br>' .
			       $this->anschrift->kontakt->tel . '<br>' .
			       $this->anschrift->kontakt->fax;				 
			
		}
		
		public function getKontaktObj() {
		
			return $this->anschrift->kontakt;
			       
		}

		public function setKontaktString($mobil, $tel, $fax) {
		
			$this->anschrift->kontakt->mobil = $mobil;
			$this->anschrift->kontakt->tel = $tel;
			$this->anschrift->kontakt->fax = $fax;			 
			
		}
		
		public function setKontaktObj(Kontakt $kontakt) {
		
			$this->anschrift->kontakt = $kontakt;
			
		}
		
	}
	
	$obj = new Person('Klaus', '22941', 'Bargteheide', 'Wiesenweg 40A');
	$obj->setVname('Manfred Walter');
	echo $obj->getVname() . '<br>';
	echo $obj->getAnschriftString() . '<hr>';
	echo $obj->getKontaktString() . '<hr>';
	
	$obj->setAnschriftString('10000', 'Hamburg', 'Rathausstr.');
	echo $obj->getAnschriftString() . '<hr>';
	
	$obj->setKontaktString('01756/12345', '04531/12345', '-');
	echo $obj->getKontaktString() . '<hr>';
	
	
	$obj->setKontaktObj(new Kontakt('Mobil_1', 'Tel_1', 'Fax_1'));
	echo $obj->getKontaktString() . '<hr>';
	
	var_dump($obj->getKontaktObj());
	
	
	
	# nicht schön :-(
	#$obj->setAnschriftObj(new Anschrift('99999', 'Wien', 'Allee'));
	#echo $obj->getAnschriftString() . '<hr>';
	
	
	
	
	
	
	
	
		
	
	
	
	
	
	
	
	
	
	

	
	
	
	
	
	
	