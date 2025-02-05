<?php

	$kontext = stream_context_create(
	
					array("http" =>
					
						array(
							"method" 	=> "POST",
							"header" 	=> "Content-type: application/x-www-form-urlencoded\r\n" .
									       "User-Agent: MWTBot\r\n" .
										   "Accept-Language: Experanto\r\n" .
										   "Cookie: admin=angreifer",
							"content" 	=> "user=klaus&pwd=geheim"
							
							)
					)
					
					
				);
	
	
	$datei = file_get_contents("http://localhost:8080/__PHPA/requestcheck.php", false, $kontext);
	
	
	echo htmlspecialchars($datei);
	