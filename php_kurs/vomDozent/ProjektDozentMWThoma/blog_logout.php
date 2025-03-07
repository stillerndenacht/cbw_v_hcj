<?php

	include_once 'includes/init_blog.inc.php';	
	
	$blog = new Blog();
	
	# Falls man nicht angemeldet ist oder wenn man angemeldet ist
	# und abgemeldet wurde wird danach einfach die Anmeldeseite 
	# erneut aufgerufen.

	if($blog->islogin()) {$blog->logout();}
		
	header('Location: blog_login.php');
	die;