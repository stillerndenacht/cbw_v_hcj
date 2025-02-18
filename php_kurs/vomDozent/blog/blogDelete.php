<?php

	include_once 'includes/blog_init.inc.php';
	$blog = new Blog();
	
	if(!$blog->isLogin()) {
		header('Location: blogUebersicht.php');
		die;
	}
	
	$key = $_GET['key'] ?? false;
	
	if($key !== false) {
		# KEINE FEHLERBEHANDLUNG :-)
		$blog->delItem($key);
	}
	header('Location: blogUebersicht.php');
	die;
		