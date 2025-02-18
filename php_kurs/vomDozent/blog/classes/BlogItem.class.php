<?php

class BlogItem {
	
	private $subject = '';
	private $body = '';
	private $date = 0;
	
	public function __construct($subject, $body) {
		
		$this->subject = $subject;
		$this->body = $body;
		$this->date = time();
	}
	
	public function getSubject() {
		return $this->subject;
	}
	
	public function setSubject($subject) {
		$this->subject = $subject;
	}
	
	public function getBody($count = 0) {
		
		$erg = $this->body;
		if($count > 0) {
			$erg = substr($erg, 0, $count);
			if(strlen($this->body) > strlen($erg)) $erg .= "…";
		}
		
		return $erg;
	}
	
	public function setBody($body) {
		$this->body = $body;
	}
	
	
	public function getDate() {
		return $this->date;
	}

}
