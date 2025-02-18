<?php

class PDOConnection {
	
	private $host 		= 'localhost';
	private $port 		= '3306';
	private $dbname 	= '';
	private $user 		= 'root';
	private $pwd  		= '';
	
	public static $db			= null;
	
	function __construct($host, $port, $dbname, $user, $pwd) {
		
		$options = array(PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION,
						 PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC,
					     PDO::ATTR_PERSISTENT 			=> true);
		
		$this->$host 		= 'localhost';
		$this->$port 		= '3306';
		$this->$dbname 		= '';
		$this->$user 		= 'root';
		$this->$pwd  		= '';
		
		try {
			self::db = new PDO("mysql:host={$this->host};dbname={$this->dbname};port={$this->port}", $this->user, $this->$pwd, $options);
		} catch(PDOException $e) {
			die('<br>Leider ist der DB-Server nicht erreichbar');
		}	
		
	}
	
	
		
}