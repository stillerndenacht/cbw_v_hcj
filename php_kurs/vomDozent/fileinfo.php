<?php

	function tf($wert) {
		return $wert ? 'TRUE<br>' : 'FALSE<br>';
	}
	
	
	$file = 'images/buttons.gif';
	
	echo 'file_exists: ' . tf(file_exists($file)) .
		 'is_file: ' . tf(is_file($file)) . 
		 'is_dir: ' . tf(is_dir($file)) .
		 'is_readable : ' . tf(is_readable($file)) .
		 'is_writable : ' . tf(is_writable($file)) .
		 'is_executable: ' . tf(is_executable($file)) .
		 'is_link: ' . tf(is_link($file)) .
		 'is_uploaded_file: ' . tf(is_uploaded_file($file));
	
	
	if(($size = @filesize($file)) !== false) 
		echo $size;
	else
		echo "Datei gibt es nicht";
	
	?>
	

	
	