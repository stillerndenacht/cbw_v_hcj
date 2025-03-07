<?php

	class BlogItem {
		
		private $id = 0;
		private $subject = '';
		private $body = '';
		private $createDate = 0;
		private $viewCount = 0;
		private $voteCount = 0;
		private $voteSum = 0;
		private $isFree = false;
		
		
		function __construct($subject, $body) {
			
				$this->subject = $subject;
				$this->body = $body;
				$this->createDate = time();
				
		}
		
		# --------------------------------------------------------
		# Gibt das Subject zurück		
		# --------------------------------------------------------
		function getSubject() {
			
			return $this->subject;
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Gibt den Body zurück. count=0, dann alles sonst Anzahl
		# strip, wenn True dann strip_tags auf den Inhalt
		# --------------------------------------------------------
		public function getBody($count = 0, $strip = false) {
		
		
			$erg = $this->body;
			
			if($strip) $erg = strip_tags($erg);
			
			if($count > 0) {
				$erg = substr($erg, 0, $count);
				if(strlen($this->body) > strlen($erg)) $erg .= "…";
			}
		
			return $erg;
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Gibt das Datum zurück		
		# --------------------------------------------------------
		function getCreateDate() {
			
			return $this->createDate;
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Gibt die ID zurück
		# --------------------------------------------------------
		function getID() {
			
			return $this->id;
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Gibt die Anzahl der Views zurück
		# --------------------------------------------------------
		function getViewCount() {
			return $this->viewCount;
		}
		# --------------------------------------------------------
		
		# --------------------------------------------------------
		# Erhöht die Anzahl der Views um 1
		# --------------------------------------------------------
		function addViewCount() {
			
			return ++$this->viewCount;
		}
		# --------------------------------------------------------
		
		
		function addVote($vote) {
			$this->voteCount++;
			$this->voteSum += $vote;
		}
		
		function getVoteCount() {
			return $this->voteCount;
		}
		
		function getVoteSum() {
			return $this->voteSum;
		}
		
		function getVoting() {
			
			$erg = 0;
			if($this->voteCount > 0) {
				$erg = round($this->voteSum / $this->voteCount, 1);
			}
			
			return $erg;
		}
		
		
		function getStars() {
			
			$erg = '';
			for($i = 0; $i < round($this->getVoting()); $i++) {
				$erg .= "&#10038";
			}
			return '<sup style="color: orange">' .$erg . '</sup>';
			
		}
		
		
		function isFree() {
			
			return $this->isFree;
		}
		
		
	
	}