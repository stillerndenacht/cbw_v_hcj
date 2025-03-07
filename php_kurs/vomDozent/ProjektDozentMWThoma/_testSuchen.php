<?php

	# Enthält den Autoloader für die Klassen Blog und BlogItem
	include_once 'includes/init_blog.inc.php';	
	
	# Blog-Klasse instanzieren
	$blog = new Blog();
		
		$where = '';
	$such = $_POST['suchen'] ?? false;
	
	if($such) {
		
		# Case-Insensitive
		$where = ' WHERE body LIKE "%' . $such . '%" OR subject LIKE "%' . $such . '%"';
		# Case-Sensitive;
		#$where = ' WHERE body LIKE BINARY "%' . $such . '%" OR subject LIKE BINARY "%' . $such . '%"';
	}


	$stmt = $blog->DB->prepare('SELECT * FROM BlogItems ' . $where);
	$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "BlogItem", [null, null]);
	$stmt->execute();
	$items = $stmt->fetchAll();
	
	
	# --------------------------------------------------
	# Worter markieren mit preg. Lösung ist OK
	# --------------------------------------------------
	function markWord($text, $such) {
		$pattern = '/(' . preg_quote($such) . ')/i';
		$replacement = '<mark>${1}</mark>';
		return preg_replace($pattern, $replacement, $text);
	}
	# --------------------------------------------------
	
	
	# AUSGBAE
	# Gefundene Items :-)
	
	foreach($items as $item) {
	
		#echo '<h1>' . $item->getSubject() . '</h1>' . $item->getBody(strip: true) . '<hr>';
		
		#echo '<h1>' . str_ireplace($such, "<mark>$such</mark>",$item->getSubject()) . '</h1>' .
		#str_ireplace($such, "<mark>$such</mark>",$item->getBody(strip: true)) . '<hr>';
		
		# DAS IST BESSSER :-)		
		echo '<h1>' .markWord($item->getSubject(), $such) . '</h1>' . markWord($item->getBody(strip: true), $such) . '<hr>';
	}
	
	

?>

<form method="POST">
	<input type="search" name="suchen">
	<input type="submit">
</form>