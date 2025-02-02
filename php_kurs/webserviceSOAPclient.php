<?php
$options = [
    'uri' => 'meinnamespace',
    'location' => 'http://localhost/hcj_cbw/php_kurs/webserviceSOAPserver.php'
];
$client = new SoapClient(null, $options);

# ------- einfache Schreibweise des Aufrufs ---------
echo $client->webservicefunc(); 
echo "<hr>";

# --------- Alternative -------------
try{
echo $client->__soapCall('webservicefunc', []); # kompliziertere Schreibweise
}
catch (Exception $e){
echo $e->getMessage();
}