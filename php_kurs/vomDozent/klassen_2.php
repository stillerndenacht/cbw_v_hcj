<?php

#declare(strict_types=1);

class Anschrift {
		
	public $plz = '';
	public $ort = '';
	public $str = '';
	
	public function __construct($plz = '', $ort = '', $str = '') {
		$this->plz = $plz;
		$this->ort = $ort;
		$this->str = $str;
	}	

}

class Person {
		
	private $vname = '';
	private $anschrift;			# Anschrift;
	
	public function __construct($vname, $anschrift) {
		
		if($anschrift instanceOf Anschrift) {
			$this->anschrift = $anschrift;
		} else {
			$this->anschrift = new Anschrift();
		}

		$this->vname = $vname;
	}
	
	public function getAnschrift() {
		return $this->anschrift;
	}
	
	public function setAnschrift($anschrift) {
		
		$this->anschrift = $anschrift;
	}
	
	public function setVname($vname) {
		$this->vname = trim($vname);
	}

}



$p1 = new Person('Klaus', new Anschrift);


var_dump($p1);


/*
$adresse = clone($p1->getAnschrift());

$adresse->str = 'Wiesenweg';


$p1->setAnschrift($adresse);

var_dump($p1);
*/
