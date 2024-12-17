<?php

	declare(strict_types=1);
	
	
	function func($int) {
		
		$erg = false;
		
		#if(!is_array($int)) return $erg;
		
		if(is_array($int))	
			$erg = implode(", ", $int);
		
		return $erg;
		
	}

	
	#if(func([0]) === false) { echo 'Fehler'; };
	
	#echo $var;
	
	function test(int $par1) : int {
		
		$erg = 1;
		
		return 1;
		
	}
	
	#var_dump(test(10));
	
	
	
	
	function prozedur($int) {
		
		echo $int;
		
		return "Ergebnis";
	}
	
	
	#var_dump(prozedur(10.6));	

	#$nameDerFunktion = 'prozedur';
	
	#echo $nameDerFunktion(10);
	
	#var_dump(is_callable($nameDerFunktion));
	
	
	function x($func) {
		# prozedur
		echo $func(50);
	}
	
	#x($nameDerFunktion);
	
	
	
	$vari = '-----------';
	
	$ausgabe = function ($para) use ($vari) {
				echo "Meine $para $vari <br>";
				
				return 'Geht';
			   };
			   
	#var_dump($ausgabe);
	
	#$ausgabe('Parameter');
	
	function anwenden($func) {
		# prozedur
		echo $func(50);
	}
	
	#anwenden($ausgabe);
	
	
	#var_dump(lottozahlen());
	
	#include 'includes/lotto.inc.php';
	
	if(!function_exists('lottozahlen')) {
		include 'includes/lotto.inc.php';
	} 
	#var_dump(lottozahlen());
	
	
	$vari = '-----------';
	
	$s1 = '$vari';
	$s2 = "$vari";
	
	#echo $s1 . $s2;
	
	$variable = "XXXXXXXXX";
	
	$string = <<<'NOWDOC'
Hans Thoma stammte aus einfachen Verhältnissen. Sein Vater Franz Joseph Thoma (179-1855) war """"""ein gelernter Müller und arbeitete """als Holzarbeiter im Schwarzwald. ' Seine Mutter 'Rosa Thoma' (1804-1897), geborene Mayer, stammte aus einer Kunsthand'werkerfamilie. Ihr Großvater stammte aus Menzenschwand und war ein Bruder des Großvaters von Franz Xaver und Hermann Winterhalter.[1][2]

Der Kunsthistoriker Henry Thode stilisierte Thomas Werk zu einer Verkörperung nationaler Identität, womit der Vereinnahmung durch die nationalsozialistische Kunstkritik der Boden bereitet wurde. Der Artikel Kampfbund für deutsche Kultur gibt diesbezüglich einen Hinweis, wie völkisch gesinnte Kreise die Hans-Thoma-Schule in Karlsruhe zu einem Zentrum deutschtümelnder Strömungen (Antisemitismus, Antikapitalismus und Heimatkunst) entwickelten. 2023 präsentierte der 
Hans-Thoma-Preisträger Marcel van Eeden die Ausstellung „1898“, in der anhand der Reise Thomas zur Rembrandt-Ausstellung in Amsterdam anhand diverser Dokumente hergeleitet wird, dass Thoma aktiver Antisemit gewesen sei.[10][11] Dagegen gab es einzelnen Widerspruch,[12] welcher aus Sicht der Staatlichen Kunsthalle Karlsruhe „massive Verletzungen von Standards des guten wissenschaftlichen Arbeitens“ aufwies, weswegen eine erneute Stellungnahme veröffentlicht wurde.[13]

Zu Thomas Schülern zählte unter anderem der spätere Leiter der Keramikfachschule Landshut Hermann Haas.
NOWDOC;

echo $string;

	