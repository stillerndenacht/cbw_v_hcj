<?php
# Simple Object Access Protokol
# geeignet um auch größere Datenmengen über einen webservice zu versenden
# verpackt als xml
# extention=soap  muss im php.ini enabled sein
function webservicefunc()
{
    return "Hallo ich bin der webservice";
}

$options = ['uri'=>'meinnamespace']; # wenn kein WSDL(Web Services Description Language) dann muss ein Namespace angegeben werden (bei WSDL wird er mitgeliefert)
# $server = new SoapServer('url/Ziel/der/WSDL.wsdl'); # .wsdl werden aus dem Internet-Quellen geladen (fast nie selbst gemacht)
$server = new SoapServer(null, $options); # wenn man keine WSDL nutzen will dann null

# --- ACHTUNG ! keine var_dumps keine Echos in dieser Datei -- das zerschießt die aufgebaute XML
#var_dump($server); # Ausgabe: object(SoapServer)#1 (1) { ["__soap_fault":"SoapServer":private]=> NULL } soap fault ist eine exception

$server->addFunction('webservicefunc'); # so wird eine Funktion beim Soap-Server registriert/ eingefügt (mehrere als array möglich)
# die Funktion muss natürlich im Skript enthalten oder includiert sein
# $server->setClass(); # kann auch mehrere Funktionen einfügen, die dann in der Klasse enthalten sind

$server->handle();

// function webservicefunc()
// {
//     return "Hallo ich bin der webservice";
// }

// $service = $_GET['serv'] ?? '';

// if ($service == "webservicefunc") {
//     echo webservicefunc();
// } else {
//     echo "Hier ist nix";
// }