<?php

	class Blog {
		
		private $username 	= 'MeiMei';	# Blogger
		private $userpwd 	= '$2y$10$30BOgiD3fzijP2B7yFSbg.qKeAOa9ixEWwClUG/okXDhs1vfxTjSm';	#geheim
		public $DB;
		
		
		# --------------------------------------------------------
		# Insatziiert die DB-Verbindung als PDO in $this->DB		
		# --------------------------------------------------------
		function __construct() {
			
				$this->createPDOConnection();
				
		}
		
		
		# --------------------------------------------------------
		# Gibt alle BlogItems als ObjektArray (BlogItem) zurück
		# ACHTUNG:
		# Liefert nur die BlogItems in Abhängigkeit von Status
		# Angemeldet oder nicht zurück. Wenn angemeldet ALLE
		# BlogItems, nicht angemeldet nur die BlogItems die
		# FREI sind!!
		# --------------------------------------------------------
		function getAllItems() {
			
			$sql = 'SELECT * FROM BlogItems ';
			if(!$this->isLogin()) $sql .= 'WHERE isFree = true ';
			$sql .= 'ORDER BY createDate DESC';
			$stmt = $this->DB->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "BlogItem", [null, null]);
			$stmt->execute();
			return $stmt->fetchAll();
			
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Gibt einen BlogItem als BlogItem oder FALSE zurück
		# wenn die ID nicht vorhanden ist ODER der BlogItem
		# mit der ID je nach Status (angemeldet oder nicht)
		# nicht gelesen werden darf!
		# --------------------------------------------------------
		function getOneItem($id) {
			
			$sql = 'SELECT * FROM BlogItems WHERE id=? ';
			if(!$this->isLogin()) $sql .= 'AND isFree=true ';
			$stmt = $this->DB->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "BlogItem", [null, null]);
			$stmt->execute([$id]);
			return $stmt->fetch();
			
		}
		
		# --------------------------------------------------------
		# Erzeugt ein neuen BlogItem und speichert in in die DB
		# Rückgabe ist die ID des neuen Blog-Eintrag
		# --------------------------------------------------------
		function newItem($subject, $body) {
			
			$item = new BlogItem($subject, $body);
			
			$sql = 'INSERT INTO BlogItems (subject, body, createDate) VALUES (?, ?, ?)';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute([$subject, $body, time()]);
			
			return $this->DB->lastInsertId();
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Erzeugt ein neuen BlogItem und speichert in in die DB
		# Rückgabe ist die ID des neuen Blog-Eintrag
		# --------------------------------------------------------
		function editItem($subject, $body, $id) {
			
			
			$sql = 'UPDATE BlogItems SET subject=?, body=? WHERE id=?';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute([$subject, $body, $id]);
						
			#return $this->DB->lastInsertId();
		}
		# --------------------------------------------------------
		
		
		# --------------------------------------------------------
		# Löscht das übergebne Item aus der DB
		# --------------------------------------------------------
		function delItem($item) {
			
			$sql = 'DELETE FROM BlogItems WHERE id = ?';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute([$item->getID()]);
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Liefert die Anzahl ALLER BlogItems zurück
		# --------------------------------------------------------
		function countAllItems() {
			$sql = 'SELECT COUNT(id) AS anzahl FROM BlogItems;';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute();
			return $stmt->fetch()['anzahl'];
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Liefert die Anzahl der BlogItems zurück die FREI sind.
		# --------------------------------------------------------
		function countFreeItems() {
			$sql = 'SELECT COUNT(id) AS anzahl FROM BlogItems WHERE isFree = true;;';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute();
			return $stmt->fetch()['anzahl'];
		}
		# --------------------------------------------------------
	
		# --------------------------------------------------------
		# Gibt true zurück wenn als Blogger angemeldet, sonst false
		# --------------------------------------------------------
		function isLogin() {
			
			return $login = $_SESSION['blogger'] ?? false;
		
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Anmelden als Blogger. Setzt die Session blogger wenn
		# das übergeben $pwd richtig ist (true), sonst false
		# --------------------------------------------------------
		function login($pwd) {
			$erg = false;
			if(password_verify($pwd, $this->userpwd)) {
				$_SESSION['blogger'] = $this->username;
				$erg = true;
			}
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Löscht das Session-Attribut blogger aus der Session
		# --------------------------------------------------------		
		function logout() {
			
			if($this->isLogin()) {
				unset($_SESSION['blogger']);
				#header('Location: ' . $_SERVER['PHP_SELF']);
				#die;
			}
			
		}
		# --------------------------------------------------------
	
		#--------------------------------------------------------
		# Setzt das übergeben Item in der DB als FREI
		# --------------------------------------------------------		
		function setItemFree($item) {
				
			$sql = 'UPDATE BlogItems SET isFree = true WHERE id = ?';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute([$item->getID()]);
			
		}
		# --------------------------------------------------------	
		
		#--------------------------------------------------------
		# Setzt das übergeben Item in der DB als GESPERRT
		# --------------------------------------------------------		
		function setItemLock($item) {
				
			$sql = 'UPDATE BlogItems SET isFree = false WHERE id = ?';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute([$item->getID()]);
			
		}
		# --------------------------------------------------------	
		
		# --------------------------------------------------------	
		# Speichert für das übergeben Item in der DB das Voting
		# --------------------------------------------------------			
		function saveVoting($item) {
				
			$sql = 'UPDATE BlogItems SET voteCount = ?, 
			                             voteSum   = ? WHERE id = ?';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute([$item->getVoteCount(), $item->getVoteSum(), $item->getID()]);
			
		}
		# --------------------------------------------------------	
		
		# --------------------------------------------------------
		# Speichert für das übergeben Item in der DB die Seitenaufrufe
		# --------------------------------------------------------		
		function saveViewCount($item) {
				
			$sql = 'UPDATE BlogItems SET viewCount = ? WHERE id = ?';
			$stmt = $this->DB->prepare($sql);
			$stmt->execute([$item->getViewCount(), $item->getID()]);
			
		}
		# --------------------------------------------------------	
		
		# --------------------------------------------------------
		# Stellt die PDO-Connection zur Datenbank FAG312 her
		# und speichert das PDO-Objekt in $this->DB
		# --------------------------------------------------------	
		private function createPDOConnection() {
	
			$options = array(PDO::ATTR_ERRMODE 				=> PDO::ERRMODE_EXCEPTION,
							 PDO::ATTR_DEFAULT_FETCH_MODE   => PDO::FETCH_ASSOC,
							 PDO::ATTR_PERSISTENT 			=> true);
	
			try {
				$this->DB = new PDO("mysql:host=localhost;dbname=FAG312;port=3306", 'root', '', $options);
			} catch(PDOException $e) {
				die('<br>Leider ist der DB-Server nicht erreichbar');
			}
			
		}
		# --------------------------------------------------------
	
	}