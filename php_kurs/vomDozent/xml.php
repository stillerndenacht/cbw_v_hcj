<?php
	
	/* 
	
	Seite: xml.php
	Erzeugen Sie einen STRING mit einem wohlgeformten
	XML-STRING ($xmlstring), der nachfolgende Daten besitzt:
	
	vorname		nachname	alter
	Manfred		Thoma		29
	Reiner		Korn		63
	Klara 		Korn		19
	Paul		Pansen		37
	Rita 		Müller		28
	
	Speichern Sie zusätzlich (zur "Sicherheit") den String
	in eine Textdatei mit den Namen "xmlfile.xml" unter 
	"text" ab.
	
	Überprüfen Sie im Browser ob die XML-Datei wohlgeformt ist.
	
	*/

	$xmlstring = <<<XML
<?xml version="1.0" encoding="UTF-8" ?>
<personen>
	<person nr="1">
		<vorname nr="4711">Manfred</vorname>
		<nachname>Thoma</nachname>
		<alter>29</alter>
	</person>
	<person>
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

$xml = @simplexml_load_string($xmlstring);

if(!$xml) {
	echo 'Kein XML-String';
	die;
}


/*
$manfred = $xml->person[0];

$manfred->nachname->addAttribute('nummer' , 'wert');
$manfred->nachname->addAttribute('id' , 'wert');
$manfred->nachname->addAttribute('color' , 'red');

#var_dump($manfred->nachname);


$person = $xml->person[0];

echo $person->vorname . ' ' . $person->nachname . 
     ' ist ' . $person->alter . ' Jahre alt.<br>';
*/

/*
foreach($xml->person as $pers) {
	echo $pers->vorname . ' ' . $pers->nachname . 
     ' ist ' . $pers->alter . ' Jahre alt.<br>';
	 
	 echo $pers->vorname['attr'] . '<br>';
}
*/


#$x = (string)$xml->person[0]->vorname;

#var_dump($x);




#$xml->person[0]->vorname = '111NEU!!!!';

#var_dump($einer);

#$xml->asXML('text/test.xml');

/*
$xml = simplexml_load_string('<freunde />');

$neuer = $xml->addChild('freund');


$neuer->addChild('vorname','MeiMei');
$neuer->addChild('nachname','Thoma');
$kontakt = $neuer->addChild('kontakt');

$kontakt->addChild('email', 'mail.de');
$kontakt->addChild('telefon', '3453242');


$neuer = $xml->addChild('freund');
$neuer->addChild('vorname','1MeiMei');
$neuer->addChild('nachname','1Thoma');
$kontakt = $neuer->addChild('kontakt');

$kontakt->addChild('email', 'mail.de');
$kontakt->addChild('telefon', '3453242');


#echo $xml->asXML();

$xml->asXML('text/test.xml');
*/



$xml_dom = <<<XML
 <books>
 <book>Patterns of Enterprise Application Architecture</book>
 <book>Design Patterns: Elements of Reusable Software Design</book>
 <book>Clean Code</book>
 </books>
XML;






$dom = new DOMDocument;
@$dom->loadHTMLFile('https://www.cbw-weiterbildung.de/standorte/hamburg.html');

# ->load			Aus einer XML-Datei			= simplexml_load_file
# ->loadXML			Aus einem XML-STRING		= simplexml_load_string
# ->loadHTMLFile	Nicht wohlgeformt möglich aus der HTML-Datei
# ->loadHTML		Nicht wohlgeformt möglich aus einem HTML-STRING

# ->save			In eine Datei speicher		= asXML('datei.xml')
# ->saveXML			in eine String liefern		= asXML()
# ->saveHTMLFile	Nicht wohlgeformt in eine Datei speichern
# ->saveHTML		Nicht wohlgeformt in einen String "speichern"

#echo $dom->saveHTML();

$ankers = $dom->getElementsByTagName('img');

$bilder = [];
foreach ($ankers as $anker) {
  $bilder[] = $anker->getAttribute('src');
}

var_dump($bilder);


foreach($bilder as $bild) {
	$name = basename($bild);
	#if($name) {
		#$img = file_get_contents('https://www.cbw-weiterbildung.de/' . $bild);
		#file_put_contents('teambilder/' . $name, $img);
	#}
}



