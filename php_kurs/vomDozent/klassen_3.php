<?php

include_once 'includes/klassen_3.inc.php';

$firma = new Unternehmen('CBW');


echo 'Beschäftigt: ' . $firma->countPersonen() . '<hr>';

foreach($firma->getPersonen() as $key => $person) {
	
	$anschrift = $person->getAnschrift();
	echo "[$key] => {$person->getVname()}  aus {$anschrift->ort}.<br>";
	
}

?>

<a href="klassen_3_insert.php">Dummy Person einfügen</a>


















<?php
function autoloader($klasse) {
		
		
		$datei = 'classes/' . $klasse . '.inc.php';
		
		if (file_exists($datei)) {
			include_once $datei;
		} else {
			echo '<p style="color: red">Konnte Klasse "' . $klasse . '" nicht laden.</p>';
			die;
		}
		
	}

	#spl_autoload_register('autoloader');
	
	?>
