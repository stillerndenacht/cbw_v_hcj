<?php

$host = 'localhost';
$dbname = '';
$port = 3306;
$user = 'root';
$pw = '';

$options = array();

try {
    $db = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pw);
    var_dump($db);
    
} catch (PDOException $e) {
    echo $e->getMessage();
    die("<br>Diese DB : $dbname existiert nicht"); 
}
