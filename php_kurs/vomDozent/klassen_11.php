<?php

class Klasse {
	
	public  	$pub 	= '';
	protected 	$pro	= '';
	private 	$pri 	= '';
	
	
	public function __construct() {
			
		echo 'Beim instanziieren des Objektes => ' .  __METHOD__ . '<br />';
		
	}
	
	public function __destruct() {
		
		echo 'Zerstören (unset, null, Ende) des Objektes => ' .  __METHOD__ . '<br />';
		
	}
	
	public function __get($name) {
		
		echo 'Lesender Zugriff auf ein nicht vorhandenes Attribut (oder private/protected) "' .
			  $name . '" => ' . __METHOD__ . '<br />';
	
		return $this->$name;	
		
	}
	
	public function __set($name, $value) {
		
		#echo $name . '<br />' . $value . '<br />';
		
		echo 'Schreibender Zugriff auf ein nicht erlaubtes (private, protected) 
			  oder nicht vorhandenes Attribut => ' . __METHOD__ . '<br />';
	
	}
	
	public function __call($name, $values) {
			
			#echo $name . '<br />';
			#var_dump($values);
		
			
			echo 'Aufruf einer nicht vorhandenen / erlaubten (private, protected) 
			      Methode => ' . __METHOD__ . '<br />';
		
			
		/*
			$name = strtolower($name);
			
			$result = 0;
			
			switch($name) {
				case 'addition':  		$result = $values[0] + $values[1]; break; 
				case 'subtraktion':  	$result = $values[0] - $values[1]; break;
				case 'division':  		$result = $values[0] / $values[1]; break;
				case 'multi':  			$result = $values[0] * $values[1]; break;
				case 'datum':			$result = date('d.m.Y H:i:s'); break;
				default: 				$result = 'Geht nicht'; break;
			}
			
			return $result;
		*/	
	
		
		}
	
	public function __invoke(...$values) {
			
		#var_dump($values);
		echo 'Wenn eine Instanz/Objekt als Funktion aufgerufen wird => ' . __METHOD__ . '<br />';
		
		#return "ERGEBNIS";
	}
	
	public function __toString() {
				
		echo 'Liefert einen String zurück wenn die Klasse wie ein String verwendet wird => ' . __METHOD__ . '<br />';
		
		return $this->pro . ' ' . $this->pri;
		
	}
	
	public function __sleep() {
			
		echo 'Wenn eine Instanz serialisiert wird => ' . __METHOD__ . '<br />';
		
		return array('pub');	
			
	}
	
	public function __wakeup() {
		
		echo 'Wenn eine Instanz unserialisiert wird => ' . __METHOD__ . '<br />';
	
		#$this->pri = 'Geladen';
			
		}
	
	private function methode() { }
	
}

$obj = new Klasse();
$obj->pri;
$obj->pri = 'SETZEN';
$obj->unbekannt();
$obj();
echo $obj ;
$obj->pub = 'DAS WIRD SERIALISIERT';
$seri = serialize($obj);
$neu = unserialize($seri);

