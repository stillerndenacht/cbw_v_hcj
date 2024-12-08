<?php
	
	$eingangProTag	= 6000;
	$tageProJahr	= 220;
	$dpi			= 300;
	$tiefe			= 24;
	$kompression	= 40/100;			# AUF 40 Prozent = 0,4!
	
	$hoeheCm		= 29.7;
	$breiteCm		= 21;
	
	# Umrechen auf gleiche Ma�einheit. Gew�hlt inch.
	$hoeheInch		= $hoeheCm / 2.54;
	$breiteInch		= $breiteCm / 2.54;
	
	#Anzahl der Punkte pro Seite berechnen
	$dotsProScan	= ($hoeheInch * $dpi) * ($breiteInch * $dpi);
	
	# Anzahl der ben�tigten Bits pro Seite
	$bitsProScan	= $dotsProScan * $tiefe;
	
	# Anzahl der ben�tigten Bis pro Seite kompremiert
	$bitsProScanKomp=	$bitsProScan * $kompression;
	
	# Speicher einer Seite in TiB
	$sizeProScanByte= $bitsProScanKomp / 8;
	
	# Summenberechnung
	$sizeGesamtByte = $sizeProScanByte * $eingangProTag * $tageProJahr;
	
	# Umwandeln in TiB
	$sizeGesamtTiB = $sizeGesamtByte / 1024 / 1024 / 1024 / 1024;
	
	echo $sizeGesamtTiB . ' = ' . ceil($sizeGesamtTiB) . ' TiB';
?>