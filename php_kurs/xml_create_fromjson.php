<?php
# ---- jsonfile in ein Array umwandeln -----
$array = json_decode(file_get_contents('files/freunde_json.txt'));
#var_dump($array); # ein Array mit Objekten
# ---- xml-file vorbereiten (Codierung und root-tag festlegen)
$xmlfile = simplexml_load_string('<?xml version="1.0" encoding="UTF-8" standalone="yes"?><root />');
#var_dump($xmlfile); # sieht man nur im Quelltext

# für jedes Array-Objekt einen tag-Name(freund) vergeben und es gleichzeitig mit den Elementen des inneren assoziativen Arrays (key = tagname, value = value) befüllen
# Ausnahme key = id -> wird als Attribut eingebaut
foreach ($array as $xmlchild) {
   
    #var_dump($xmlchild);
    $child = $xmlfile->addChild('freund');
    foreach ($xmlchild as $key => $value) {
        if ($key == 'id') {
            $child->addAttribute($key, $value);
        } else {
            $child->addChild($key, $value);
        }
    }
}
#var_dump($xmlfile);
# das so entstandene xml als .xml abspeichern
$xmlfile->asXML('files/fromjson_freunde.xml');
