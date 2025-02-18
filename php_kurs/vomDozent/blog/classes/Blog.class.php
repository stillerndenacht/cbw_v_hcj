<?php

class Blog {
	
	private $items = array();
	private $blogname = '';
	private $filename = '';
	
	private $loginKey  = 'Blogger';		# Key in der SESSION
	private $loginUser = 'MeiMei';		# Username Login
	private $loginPWD  = '$2y$10$30BOgiD3fzijP2B7yFSbg.qKeAOa9ixEWwClUG/okXDhs1vfxTjSm';	 # geheim
	
	public function __construct($blogname = 'DemoBlog', $filename = 'daten/blog.seri') {
		
		$this->blogname = $blogname;
		$this->filename = $filename;
		$this->load();
	}

	public function countItems() {
		return count($this->items);
	}
	
	public function setItem($subject, $body) {
		
		$item = new BlogItem($subject, $body);
		array_unshift($this->items, $item);
		$this->save();
	}
	
	public function getItems() {
		return $this->items;
	}
	
	public function getItem($key) {
		$erg = false;
		if(isset($this->items[$key])) $erg = $this->items[$key];
		return $erg;
	}
	
	public function editItem($key, $subject, $body) {
		$erg = false;
		if(isset($this->items[$key])) {
			$this->items[$key]->setSubject($subject);
			$this->items[$key]->setBody($body);
			$this->save();
		}
		return $erg;
	}
	
	public function delItem($key) {
		
		$erg = false;
		if(isset($this->items[$key])) {
			unset($this->items[$key]);
			$this->save();
			$erg = true;
		}
		return $erg;
	}
	
	public function isLogin() {
		
		return $_SESSION[$this->loginKey] ?? false;
			
	}
	
	public function login($user, $pwd) {
		
		$erg = false;
		
		if($this->loginUser == $user && password_verify($pwd, $this->loginPWD)) {
			$_SESSION[$this->loginKey] = $user;
			$erg = true;
		}
		
		return $erg;
		
	}
	
	public function logout() {
		
		if(isset($_SESSION[$this->loginKey])) unset($_SESSION[$this->loginKey]);
	}
	
		
	private function save() {
	
		$dir = pathinfo($this->filename, PATHINFO_DIRNAME);
		if(!file_exists($dir)) { mkdir($dir); }
		
		@file_put_contents($this->filename, serialize($this->items));
	
	}

	private function load() {
	
		if($seri = @file_get_contents($this->filename)) {
			$this->items = unserialize($seri);
		} 
	
	}

}
