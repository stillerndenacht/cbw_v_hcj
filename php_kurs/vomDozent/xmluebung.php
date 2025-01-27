<?php
# <![CDATA[   .....  ]]>

$xmlstring = <<<XML
<?xml version="1.0" encoding="UTF-8" ?>
<personen>
	<person gender="male" typ="Dozent" klasse="FAG312">
		<vorname>Manfred Walter</vorname>
		<nachname>Thoma</nachname>
		<alter>29</alter>
		
	</person>
	<person gender="male" typ="Teilnehmer" klasse="FAH312">
		<vorname>Reiner</vorname>
		<nachname>Korn</nachname>
		<alter>63</alter>
	</person>
	<person>
		<vorname>Klara</vorname>
		<nachname>Korn</nachname>
		<alter>19</alter>
	</person>
	<person>
		<vorname>Paul</vorname>
		<nachname>Pansen</nachname>
		<alter>37</alter>
	</person>
	<person>
		<vorname>Rita</vorname>
		<nachname>Müller</nachname>
		<alter>28</alter>
	</person>	
</personen>
XML;

$xmlfile = 'text/xmlfile.xml';

#file_put_contents($xmlfile, $xmlstring);

#$xmlstring = file_get_contents($xmlfile);


#file_put_contents($xmlfile, $xmlstring);

if(($xml = simplexml_load_string($xmlstring)) !== false) {
	#echo 'XML OK';
} else {
	die('ERROR');
}

#foreach($xml->person[0]->attributes() as $key => $value)
	#echo $key . ' => ' . $value . '<br>';

#var_dump($xml->person[0]->vorname != false);



foreach($xml->person as $key => $person) {
	
	if($person->alter <= 30) {
		echo $person->vorname . ' ' . $person->nachname . ' ist ' . $person->alter . ' alt und ist ' . 
		$person['gender']. ' <br>';
	}
	
}

