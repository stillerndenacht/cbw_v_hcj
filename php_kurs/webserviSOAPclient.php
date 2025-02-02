<?php
$options = ['uri'=>'mysoapnamesp',
'location'=>'http://localhost/hcj_cbw/php_kurs/webserviSOAPserver.php'];

$client = new SoapClient(null,$options);

echo "so ein Zufall Nr. : ";
echo $client->zufall()."<hr>";

echo "ich wollte gerade Lotto spielen : ";
echo $client->lotto()."<hr>";

echo "da zitiere ich mal : ";
echo $client->zitat()."<hr>";

echo "breaking news : ";
echo $client->rssnews()."<hr>";
