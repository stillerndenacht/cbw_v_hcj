<?php

	
	
	#$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'DE';
	$lang = $_COOKIE['lang'] ?? 'DE';
	
	
	$texte = [
				['DE' => 'Willkommen', 'EN' => 'Welcome', 'FR' => 'Accueillir'],
				['DE' => 'Text1 DE', 'EN' => 'Text1 EN', 'FR' => 'Text1 FR'],
				
			  ];
			  
	echo $texte[0][$lang];