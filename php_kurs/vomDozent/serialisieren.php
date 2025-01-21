<?php

	$var  = array(array('vorname' => 'MeiMei', 'nachname' => 'Thoma'),
				  array('vorname' => 'Paul', 'nachname' => 'Panse')
				 );
				 
	#echo mb_strlen($var) . '<br>';
	
	#$seri = serialize($var);
	#file_put_contents('text/serialisieren.txt', $seri);
	
	#echo $seri . '<br>';
	
	#$unseri = unserialize($seri);
	
	
	#var_dump($unseri);
	
	
	
	#file_put_contents('text/serialisieren.txt', $seri);
	
	$laden = unserialize(file_get_contents('text/serialisieren.txt'));
	
	var_dump($laden);
	
	#$laden[] = array('vorname' => 'NEU', 'nachname' => 'Ganz NEU');
	
	#file_put_contents('text/serialisieren.txt', serialize($laden));