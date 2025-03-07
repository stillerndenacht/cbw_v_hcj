<?php
	include_once 'includes/init_blog.inc.php';	
	
	$blog = new Blog();
	
	
	function randomItem() {
		
				
		global $blog;
		
		$sql = 'SELECT id, subject, body FROM BlogItems WHERE isFree = true ORDER BY RAND() LIMIT 1;';
		
		$stmt = $blog->DB->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, "BlogItem", [null, null]);
		$stmt->execute();
		$item = $stmt->fetch();
		
		return '<h4>' . 
				'<a href="http://localhost:8080/__PHPA/_projekt/blog_detail.php?id=' . $item->getID() . '" title="Beitrag aufrufen.">' .
				$item->getSubject() . 
				'</a>' .
				'</h4>' .
				nl2br(str_replace(PHP_EOL . PHP_EOL . PHP_EOL, PHP_EOL . PHP_EOL, $item->getBody(320, true)));
		
	}
		

	function getItem($id) {
		
		global $blog;
		
		if($item = $blog->getOneItem($id)) 
			return '<h4>' . $item->getSubject() . '</h4>' .nl2br($item->getBody(500, true));
		else
			return "ERROR";
		
		
	}
	
	
	
	$options = ['uri' => 'http://localhost/soap/'];
	$server = new SoapServer(null, $options);

		
	$server->addFunction('randomItem');
	$server->addFunction('getItem');

	
	$server->handle();
	
	

?>