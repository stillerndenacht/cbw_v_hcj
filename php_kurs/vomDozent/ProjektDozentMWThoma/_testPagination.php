<?php

	# Enthält den Autoloader für die Klassen Blog und BlogItem
	include_once 'includes/init_blog.inc.php';	
	
	# Blog-Klasse instanzieren
	$blog = new Blog();
	
	# Blog::DB enthhält das PDO object
	#$pdo = $blog->DB;
	#var_dump($pdo);
	
	
	# Vorbereitung für die Pagination 
	$page = $_GET['page'] ?? 0;								# aktuelle Seite
	
	$anzahlProSeite = 3;									# Wieviele Ergebnisse der Abfrage sollen jeweils geliefert werden
	$anzahlItems = $blog->countAllItems();					# Wieviele Einträge sind insgesamt vorhanden
	$maxSeiten = ceil($anzahlItems / $anzahlProSeite); 		# Auf wieviele Seiten aufteilen
	
	
	
	
	# ----------------------------------------------
	# Pagination aufbauen. simple... simple
	# ----------------------------------------------
	if($maxSeiten > 1) {
		
		for($i=0; $i<$maxSeiten; $i++) {
			if($i != $page)
				echo '<a href="?page=' . $i  . '">' . $i + 1 . '</a> ';
			else
				echo $i + 1 . ' ';
		}
	}
	
	echo "<br><br>";
	# ------------------------------------------------
	
	
	/*
	# SELECT * FROM BlogItems LIMIT 3 OFFSET 0;
	# Keinen überspringen OFFSET 0 von dann nur 3 (LIMIT) liefern
	# SELECT * FROM BlogItems LIMIT 3 OFFSET 3;
	# überspringen die ersten drei (OFFSET 3) von dann nur 3 (LIMIT) liefern
	# SELECT * FROM BlogItems LIMIT 3 OFFSET 6;
	# überspringen die ersten sechs (OFFSET 6) von dann nur 3 (LIMIT) liefern
	# etc.
	*/
	# LIMIT = Wieviele sollen angezeigt werden
	# OFFSET = Wieviele sollen vom Ergebnis "übersprungen werden" 0 = keiner/ab Anfang,   page(2) * $anzahlProSeite(3)  = 6
	
	# Prepare-Statement vorbereiten
	$stmt = $blog->DB->prepare('SELECT * FROM BlogItems LIMIT ' .  $anzahlProSeite . ' OFFSET ' . $page * $anzahlProSeite );
	
	
	# Den FETCHMODE für das PDO-Statement setzen. Bruacht man dann nicht bei fetch()/fetchAll() machen
	$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "BlogItem", [null, null]);
	# Prepare-Statement ausführen
	$stmt->execute();
	
	
	$items = $stmt->fetchAll();
	
	foreach($items as $item) echo $item->getSubject() . '<br>';
	
	

