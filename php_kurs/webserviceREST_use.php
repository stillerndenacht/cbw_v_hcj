<?php

$webservicecall = file_get_contents('http://localhost/hcj_cbw/php_kurs/webserviceREST.php?serv=webservicefunc');

echo $webservicecall;