<?php
	
	
	error_reporting(E_ALL);
					# 11111111111111
	
	$grosskunde = false;
	$kriegtrabatt = false;
	$lieferfrei = true;
	
	#$zahl = 0b100;
	
	echo decbin(E_ALL) . '<br>';
						# 111111111111111
	
	echo decbin(E_WARNING) . '<br>';
						# 000000000000010
	
	echo decbin(E_NOTICE) . '<br>';
						# 000000000001000
	
	echo decbin(E_DEPRECATED) . '<br>';
	
						# 010000000000000
	
	
	## 000000000000010
	
	# 000000000000010	WARNING
	
	# ~E_WARNING
	
	# 111111111111111
# &	~ 111111111111101	KOMPLEMENT
#	  111111111111101
#   
	#111111111111111
	#000000000000010
	#000000000000010
	
	
	#$dir = `dir`;
	
	#$dir = shell_exec("dir");
	
	#echo $dir;
	
	
	#$a = 4;
	
	$a = $a ?? 'default';
	
	echo $a ;