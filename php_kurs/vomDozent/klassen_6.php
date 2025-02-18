<?php

	abstract class Produkt {
		
		public $name = '';
		public $preis = 0.;
		
		const MWST = 19;
		
		public function __construct($name, $preis) {
			
			$this->name = $name;
			$this->preis = $preis;
		}
		
		public function ichBin() {
			echo 'Ich bin ein Produkt mit ' . self::MWST;
		}
		
	}
	
	class Buch extends Produkt{
	
		public $autor = '';
		public $seiten = 0;
		
		const MWST = 7;
		
		public function __construct($name, $preis, $autor, $seiten) {
			
			parent::__construct($name, $preis);
			$this->autor = $autor;
			$this->seiten = $seiten;
		}
		
		public function ichBin() {
			parent::ichBin();
			echo 'Ich bin ein Buch mit ' . self::MWST;
		}
		
	}
	
	class EBook extends Buch {
		
		public $downloadUrl = '';
		
		public function __construct($name, $preis, $autor, $seiten, $url) {
			parent::__construct($name, $preis, $autor, $seiten);
			$this->downloadUrl = $url;
		}
	
		public function ichBin() {
			
			echo self::MWST;
			echo 'Ich bin ein EBook über ' . $this->downloadUrl . ' erreichbar<br>';
		}
	}
	
	class CD extends Produkt{
		
		public $band = '';
		
		public function __construct($name, $preis, $band) {
			
			parent::__construct($name, $preis);
			$this->band = $band;
			
		}
		
		
		function ichBin() {
			parent::ichBin();
			echo 'Ich bin eine CD<br>';
		}
	}
	
	#$obj = new Produkt('Name', 'Preis', 'Autor', 1000, 'url');
	#$obj->ichBin();
	
	
	#var_dump($obj);
	
	
	# NUR !!!!!!!!! zur Generalsierung!!!
	abstract class Person {
		
		public $name = '';
		public $datum = '';
		public $id = '';
		
		abstract function load();
		
		abstract function save();
		
		function test() {
			echo 'ggg';
			
		}
		
	}	
		
	
	class Student extends Person{
		
		
		function load() {
			
			echo 'Load';
		}
		
		function save() {
			
			echo 'save';
		}
	}
	/*
	class Dozent extends Person {
		public $gehalt = '';
	}
	
	$obj = new Student();
	
	var_dump($obj);
	*/
	
	
	
	
	class Fertig {
		
		const MWST = 19;
		public $var1 = 1;
		protected $var2 = 2;
		
		final function copyright() {
			echo 'Erstellt von MeiMei<br>';
		}
		
	}


	class Klaus extends Fertig {
		
		public $var1 = 3; 
		
		function copyright() {
			echo 'Tolles Program von Klaus!!!!<br>';
		}
	}

	
	$obj = new Klaus();
	
	var_dump($obj->copyright());

	
	
	
	
	
	