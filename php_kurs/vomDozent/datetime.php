<?php

	echo time() . '<br>';		#RTC
	
	
	$spaeter = time() + 60 * 60 * 24 * 3457 ;
	
	
	#var_dump(microtime(true));
/*
	$date = getDate();
	
	var_dump($date);
	
	echo $date['mday'] .'.' .$date['mon'] . '.' . $date['year'] . ' ' . $date['hours'] .':' . $date['minutes'] ;
	
	*/
	
	
	echo date("d.m.Y H:i:s");
	
	$date = new DateTime('@' . time());
	
	echo $date->format("d.m.Y H:i:s");
	
	
	var_dump(checkdate(4, 30, 1990));
	
	
	
	
	
	