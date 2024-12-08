<?php
	
	
	$up 	= 40;			# in Mbs
	$down 	= 100;			# in Mbs
	$size 	= 100;			# in MiB
	
	$sizeInBit 	= $size * 1024 * 1024 * 8;			# Dateigrφίe in Bits
	$upBitsSek	= $up * 1000000;				    # Upload pro Sekunde in Bits		
	
	$dauer = $sizeInBit / $upBitsSek;				
	$dauer = ceil($dauer);							# Aufrunden;
	
	
?>