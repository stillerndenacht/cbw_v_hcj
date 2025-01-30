<?php
# der header hier ist für javascript, wenn die Server und Client auf verschiedenen Servern/Geräten laufen
header("Access-Control-Allow-Origin:*"); # CORS

function webservicefunc()
{
    echo "Hallo ich bin der webservice";
}

$service = $_GET['serv'] ?? '';

if ($service == "webservicefunc") {
    webservicefunc();
} else {
    echo "Hier ist nix";
}

#--------- Aufruf in webserviceREST_use.php ----------

// $webservicecall = file_get_contents('http://localhost/hcj_cbw/php_kurs/webserviceREST.php?serv=webservicefunc');

// echo $webservicecall;