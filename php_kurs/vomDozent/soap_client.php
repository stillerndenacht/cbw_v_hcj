<?php


	$optionen = array('uri' 		=> 'https://twin-media.de/soap',
					  'location' 	=> 'http://localhost:8080/__PHPA/soap_server.php');
	
	$client = new SoapClient(null, $optionen);

	try {
		
		#echo $client->zufall();
		#echo $client->zitat();	
		#echo $client->lotto();
		
		echo $client->zufall();
		echo $client->__soapCall('zitat', []);
		
	} catch(SoapFault $e) {
		
		echo $e->getMessage();
	}












	/*
	$option = array('uri' 	  => 'meinns',
			        'location' => 'http://localhost:8080/__PHPA/soap_server.php'
				   );
	
	$client = new SoapClient(null, $option);
	
	$zitat = $client->zitat();
	$lotto = $client->__soapCall('lottozahlen', []);
	
	
	
	try {
		
		$zufall = $client->zufall();
		
	} catch(SoapFault $e) {
		
			echo $e->getMessage() . '<br />';
	
	} 
	
	#echo $lotto . '<br />';
	#echo $datum . '<br />';
	#echo $zufall . '<br />';
	
	echo $zitat;
	
	
	*/
	
	
	
