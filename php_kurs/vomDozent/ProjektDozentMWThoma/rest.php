<?php
	include_once 'includes/init_blog.inc.php';	
	
	$blog = new Blog();
	
	
	function randomItem() {
		
		global $blog;
		$sql = 'select id, subject, body FROM BlogItems WHERE isFree = 1 ORDER BY RAND() LIMIT 1;';
		
		$stmt = $blog->DB->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "BlogItem", [null, null]);
		$stmt->execute();
		$item = $stmt->fetch();
		
		return '<h4>' . 
				'<a href="http://localhost:8080/__PHPA/_projekt/blog_detail.php?id=' . $item->getID() . '" title="Beitrag aufrufen.">' .
				$item->getSubject() . 
				'</a>' .
				'</h4>' .
				nl2br(str_replace(PHP_EOL.PHP_EOL.PHP_EOL, PHP_EOL.PHP_EOL, $item->getBody(320, true)));
		
	}
	
	
	$q = $_GET['q'] ?? false;
	
	echo match($q) {
		
		'randomItem' => randomItem(),
		default  => randomItem()
		
	};
	
	

?>