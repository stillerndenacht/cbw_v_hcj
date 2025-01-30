<?php
// keine Kommentare in XML die werden alle mit in das Objekt eingebaut und bringen die Struktur durcheinander
// standalone im Doctype ist nicht nötig

#----------- namespaces XML ----------------------
# man kann auch namespaces für xml benutzen
# xmlns:media="url" ... siehe die rss-seiten diverser rss Anbieter
# https://www.w3schools.com/xml/xml_namespaces.asp

$xmlstring = <<<XML
<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<freunde> 
    <freund gender="female" klasse="123">
        <vorname>Sandra</vorname>
        <nachname>Sonderlich</nachname>
        <alter>30</alter>
    </freund>
    <freund>
        <vorname>Selina</vorname>
        <nachname>Seltsam</nachname>
        <alter>50</alter>
    </freund>
    <freund gender="male">
        <vorname>Serkan</vorname>
        <nachname>Sonderlich</nachname>
        <alter>29</alter>
    </freund>
    <freund>
        <vorname>Karlo</vorname>
        <nachname>Komisch</nachname>
        <alter>67</alter>
    </freund>
    <freund>
        <vorname>Katharina</vorname>
        <nachname>Komplex</nachname>
        <alter>19</alter>
    </freund>
    <freund>
        <vorname>Harro</vorname>
        <nachname>Heimlich</nachname>
        <alter>37</alter>
    </freund>
    <freund>
        <vorname>Ullrich</vorname>
        <nachname>Übel</nachname>
        <alter>51</alter>
    </freund>

</freunde>
XML;
echo "<br>------------ Simple XML -------<br>";
// echo $xmlstring;
// var_dump($xmlstring);

$xmlfile = 'files/xml_uebung.xml';

file_put_contents($xmlfile, $xmlstring);

// Simple XML ....

$xml = simplexml_load_string($xmlstring); # lädt den String als xml-Objekt
#var_dump($xml); # Ausgabe: 
// ["freund"]=>
// array(7) {
//   [0]=>
//   object(SimpleXMLElement)#2 (3) {
//     ["vorname"]=>
//     string(6) "Sandra"
//     ["nachname"]=>
//     string(10) "Sonderlich"
//     ["alter"]=>
//     string(2) "30"
//   }
//   [1]=>
//   object(SimpleXMLElement)#3 (3) {
//     ["vorname"]=>
//    .....

echo "<br>------------ Simple XML from file -------<br>";
// $xmlfromfile = simplexml_load_file('files/xml_uebung.xml');

if (($xmlfromfile = simplexml_load_file('files/xml_uebung.xml')) !== false) {
    echo "Ausgabe XML ok --------- <br>";
} else {
    echo "Ausgabe XML fehlgeschlagen !! --------- <br>";
}
#var_dump($xmlfromfile);

echo "<br>------------ Simple XML einzelne Knoten/Tags ausgeben -------<br>";

echo $xmlfromfile->freund[0]->vorname; # 
// var_dump($xmlfromfile->freund);# gibt den ersten Knoten aus
// var_dump($xmlfromfile->freund[0]);
// var_dump($xmlfromfile->freund[5]->vorname);
// var_dump($xmlfromfile->freund[4]->nachname);

echo "<br>------------ Simple XML Ausgabe in Schleife -------<br>";

foreach (($xmlfromfile->freund) as  $freund) {
    echo " Vorname : " . $freund->vorname . "<br>";
    if (($freund->attributes()) != false) {
        foreach ($freund->attributes() as $attkey => $attval) {
            echo "<li>Attr.key : " . $attkey . " , Att.value : " . $attval . "</li>";
        }
        echo "<br>";
    }
    #var_dump($freund->attributes());
    #echo " Vorname : ".$freund->vorname . "<br>";
}
# <![CDATA[alles dazwischen wird nicht als xml interpretiert]]>
# alternativ kann man die htmlspezialchar-Schreibweise benutzen &lt;

// foreach (($xmlfromfile->freund) as $freundkey => $freund) {
//     var_dump($freundkey);
//     echo "index : ".$freund." Vorname : ".$freund->vorname . "<br>";
// }