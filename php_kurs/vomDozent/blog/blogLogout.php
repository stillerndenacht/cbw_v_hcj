<?php

	include_once 'includes/blog_init.inc.php';
	$blog = new Blog();
	
	if($blog->isLogin()) {
		$blog->logout();
		#header('Location: blogLogin.php');
		#die;
	}
	
	header('Location: blogUebersicht.php');
	die;
		