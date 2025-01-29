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

$dom = new DOMDocument;

# laden aus einem String ! muss wohlgeformt sein !
$dom->loadXML($xmlstring); 
# dom->load('pfad/als/string'); # lädt aus einer Datei ! muss wohlgeformt sein !

# man kann aber auch XML mit der HTML-Funktion laden
#$dom->loadHTML($xmlstring); # lädt aus einem String muss NICHT !! wohlgeformt sein
# dom->loadHTMLFile('pfad/als/string'); # lädt aus einer Datei, muss NICHT !! wohlgeformt sein

$dom->saveXML(); # in einen String liefern wie asXML()
# $dom->save('pfad/als/string'); # in eine Datei liefern wie asXML()

$dom->saveHTML(); # in einen String liefern als Html muss nicht wohlgeformt sein
# $dom->saveHTMLFile('pfad/als/string'); # in eine Datei liefern als Html, muss nicht wohlgeformt sein
#var_dump($dom);

$teile = $dom->getElementsByTagName('teil');
foreach($teile as $teil){
    echo $teil->nodeName."<br>";
    echo $teil->nodeType."<br>";
    echo $teil->nodeValue."<br>";
}

# so könnte man z.B. Elemente aus html-Seiten rausfiltern ifnodeName = 'a' 'p'....
