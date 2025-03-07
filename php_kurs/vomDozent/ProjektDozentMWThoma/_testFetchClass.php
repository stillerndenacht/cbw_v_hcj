<?php

	# Enthält den Autoloader für die Klassen Blog und BlogItem
	include_once 'includes/init_blog.inc.php';	
	
	# Blog-Klasse instanzieren
	$blog = new Blog();
	
	# Blog::DB enthhält das PDO object
	#$pdo = $blog->DB;
	#var_dump($pdo);
	
	/* Voraussetzungen:
		(1) Die Attribute der Tabelle FAG312.BlogItems MÜSSEN GLEICH BENANNT sein
		wie die Attribute in der Klasse BlogItem!!!!
	*/
	
	# Prepare-Statement vorbereiten
	$stmt = $blog->DB->prepare('SELECT * FROM BlogItems WHERE isFree = true');
	
	# Den FETCHMODE für das PDO-Statement setzen. Bruacht man dann nicht bei fetch()/fetchAll() machen
	$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "BlogItem", [null, null]);
	
	/* 
		PDO::FETCH_CLASS in Verbindung mit dem Klassenname (hier "BlogItem") bestimmt, dass
		kein Array, sondern eine Klasse vom Namen "BlogItem" erzeugt werden soll.
		
		Dabei werden die Attribute der Tabelle direkt den GLEICHNAMIGEN Attributen der Klasse
		zugewiesen.
		
		Beim Erzeugen eines Objektes der Klasse BlogItem wir (natürlich) immer ein vorhandener
		__construct(...) ausgeführt. Da FETCH_CLASS ein Objekt der Klasse BlogItem erzeugen
		und beim fetch(en) zurückliefern soll, wird ein vorhandener Konstruktor (wenn vorhanden) 
		auch ausgeführt.
		
		Der Konstruktor der Klasse BlogItem function __construct($subject, $body) erwartet aber
		zwingend zwei Parameter. Wenn FETCH_CLASS aber als Ergebnis ein Objekt der Klasse
		BlogItem erzeugt wird natürlich der Konstruktor ausgeführt. Die beiden Parameter können 
		aber nicht "direkt erkannt und übergeben werden".
		
		Daher können (optional) Parameter für den Aufruf des Konstruktors (hier zwei)
		übergeben werden: [null, null]. Ich habe hier mal NULL angegeben, kann aber auch
		was anderes sein (z.B. ['SUBJECT...', 'BODY..']	(was passendes).
		
		Obwohl wird jetzt das Problem mit den Parametern des Konstruktors gelöst haben 
		ergibt sich ein "Reihenfolgeproblem". Standmäßig werden erste die Attribute der Tabelle
		in die Attribute des Klasse übertragen und DANACH wird der Konstruktor ausgeführt.
		Das bedeutet, dass erste die "richtigen" Werte in den Attributen gespeichert werden 
		(soweit OK) und DANN (danach) der Konstruktor ausgeführt wird, der jetzt wieder
		die übergeben Werte in die Attribute "überträg". So sind i.d.F. die Werte nicht mehr
		korrekrt.
		
		Lösung: "Ändern" der Reihenfolge durch die Flag PDO::FETCH_PROPS_LATE.
		Jetzt wird ERST der Konstruktor ausgeführt (schreibt in die Attribute was rein,
		kein mir NULL) UND DANACH (later) werden erst die Attribute der Tabelle übertragen.
		Die "Dummy-Werte (NULL)" werden dann durch die Werte aus der Tabelle erstetzt.
		
		
	*/
	
	# Prepare-Statement ausführen
	$stmt->execute();
	
	# Daten mit fetch oder fetchAll lesen :-)
	#$alleItems = $stmt->fetchAll();
	
	$item = $stmt->fetch();
	
	var_dump($item);
	
	#echo $item->getSubject() . '<br>';
	#echo $item->getBody(strip: true) . '<br>';
	

