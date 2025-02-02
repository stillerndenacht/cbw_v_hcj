<?php

	function zufall() {
		return rand(1000, 9999);
	}
	function lotto() {
	
		$ziehung = array();
		
		do {
			
			$zufall = rand(1, 49);
			
			if(!in_array($zufall, $ziehung)) {
				$ziehung[] = $zufall;  # array_push($ziehung, $zufall);
			}
			
		} while(count($ziehung) < 6);
		
		sort($ziehung);
		
		return implode(', ', $ziehung);
		
	}
	function zitat() {
		
		$zitate = array(
			"Logik bringt dich von A nach B. Deine Fantasie bringt dich überall hin.",
			"Jeder Fortschritt hat einen unscheinbaren Anfang!",
			"Wer allen gefallen will, der wird selten einem dienen.",
			"Wenn wir die Ohnmacht unseres guten Willens erkennen, wird uns bewusst, wie wenig unser Wollen erreichen kann.",
			"Wenn man sich seiner machtlosen Situation bewusst wird, schlägt die Ohnmacht in Wut um.",
			"Die Zeit eines jeden läuft ab, ganz gleich wie gut er sie nutzt.",
			"Atomstrom erscheint nur deshalb sauber, weil der Schmutz und die Gefahren für unsere Kinder und zukünftige Generationen im Boden vergraben werden.",
			"Nichts bleibt dicht, alles wird licht. Wo das Haar mal war, gibt es viel Haut und kein Haar"
		);

		return $zitate[array_rand($zitate)];
		
	}
	
	$optionen = ['uri' => 'meinns'];
	
	
	$server = new SoapServer(null, $optionen);
	
	$server->addFunction('zufall');
	$server->addFunction('lotto');
	$server->addFunction('zitat');
	
	#$server->addFunction(array('zufall', 'zitat', 'lotto'));
	
	$server->handle();
	
	
/*
	function zufall() {
		return rand(1000, 9999);
	}
	
	function lottozahlen() {
	
		$ziehung = array();
		
		do {
			
			$zufall = rand(1, 49);
			
			if(!in_array($zufall, $ziehung)) {
				$ziehung[] = $zufall;  # array_push($ziehung, $zufall);
			}
			
		} while(count($ziehung) < 6);
		
		sort($ziehung);
		
		return implode(', ', $ziehung);
		
	}
	
	function zitat() {
		
		$zitate = array(
			"Logik bringt dich von A nach B. Deine Fantasie bringt dich überall hin.",
			"Jeder Fortschritt hat einen unscheinbaren Anfang!",
			"Wer allen gefallen will, der wird selten einem dienen.",
			"Wenn wir die Ohnmacht unseres guten Willens erkennen, wird uns bewusst, wie wenig unser Wollen erreichen kann.",
			"Wenn man sich seiner machtlosen Situation bewusst wird, schlägt die Ohnmacht in Wut um.",
			"Die Zeit eines jeden läuft ab, ganz gleich wie gut er sie nutzt.",
			"Atomstrom erscheint nur deshalb sauber, weil der Schmutz und die Gefahren für unsere Kinder und zukünftige Generationen im Boden vergraben werden.",
			"Nichts bleibt dicht, alles wird licht. Wo das Haar mal war, gibt es viel Haut und kein Haar"
		);

		return $zitate[array_rand($zitate)];
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*
	$option = ['uri' => 'meinns'];
	
	$server = new SoapServer(null, $option);
	
	
	#$a = array('zufall', 'datum', 'lottozahlen');    #!!!!!!!!!!!!!!!!!!!
	#$server->addFunction($a);
	
	$server->addFunction('zufall');
	$server->addFunction('lottozahlen');
	$server->addFunction('zitat');
	
	$server->handle();
	*/
	
	
