<?php

	$zahlen	= array();
	$anzahl = 10000;
	$such 	= 66666;
	
	/*
	for($i = 0; $i < $anzahl; $i++) {
		$zahlen[$i] = rand(10000, 99999);
	}
	*/
	
	# ------------------------------------------------
	# Alternativ nur verschiedene Zahlen einfügen
	# ------------------------------------------------
	$i = 0;
	while($i < $anzahl) {
		$zufall = rand(10000, 99999);
		if(!in_array($zufall, $zahlen)) {
			array_push($zahlen, $zufall);
			$i++;
		}
	}
	# ------------------------------------------------
	
	foreach($zahlen as $zahl) echo "$zahl ";
	
	if(in_array($such, $zahlen)) 
		echo "<br>$such ist im Array VORHANDEN!!";
	else
		echo "<br>$such ist NICHT vorhanden!!";
		