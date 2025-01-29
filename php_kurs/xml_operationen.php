<?php
$xmlstring = <<<XML
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<root>
    <teil id='0'>
        <name>Erster</name>
    </teil>
    <teil id='2'>
        <name>Zweite</name>
    </teil>
    <teil id='3'>
        <name>Drittes</name>
    </teil>
</root>

XML;
#---- ----- XML Elemente zählen, Casting ---------
echo "<br><br>----  XML Elemente zählen, Casting ---------<br><br>";

$xmlroot = simplexml_load_string($xmlstring);

var_dump($xmlroot->children()); # zählt die elemente ähnlich wie html
echo ((string)$xmlroot->teil[0]->name); # explizites casting

#---- ----- XML Elemente ändern und in File schreiben --
echo "<br><br>----  XML Elemente ändern und in File schreiben --<br><br>";

$xmlroot->teil[0]->name = 'Nulltes'; # ändert das referenzierte Element

$xmlroot->asXML('files/xml_operations.xml');

#---- ----- XML aufbauen --------------------------
echo "<br><br>----  XML aufbauen --------------------------<br><br>";

$xml2 = @simplexml_load_string('<root />'); # ein leeres XML

echo $xml2->asXML(); # das Ergebnis sieht man nur im Quelltext

$xml2->addChild('teil'); # fügt ein Child ein - sieht man im Quelltext
$xml2->addChild('teil');
$xml2->teil[0]->addChild('name', 'First child');
$xml2->teil[1]->addChild('name', 'Second child');

var_dump($xml2);

#---- -----addChild über Zwischenvariablen ----------
echo "<br><br>---- addChild über Zwischenvariablen ----------<br><br>";

$teil = $xml2->addChild('teil');
$teil->addChild('name', 'Third Child');

var_dump($xml2);

#---- ---Abrufen, Ändern und Hinzufügen von Attributen -----
echo "<br><br>-- Abrufen Ändern und Hinzufügen von Attributen -----<br><br>";

var_dump($xmlroot->teil[0]['id']); # Ausgabe 0
echo "<br><br>";

$xmlroot->teil[0]['id'] = '1';

var_dump($xmlroot->teil[0]['id']); # Ausgabe 1
echo "<br><br>";

# Attribute müssen auch gleich einen Wert bekommen, sonst werden sie nicht angelegt
$xml2->teil[0]['id'] = 'x'; # Anlegen von id

$xml2->teil[1]->addAttribute('id', '2'); # Anlegen von id
var_dump($xml2);
echo "<br><br>";

$xml2->teil[0]['id'] = '1';
var_dump($xml2);
