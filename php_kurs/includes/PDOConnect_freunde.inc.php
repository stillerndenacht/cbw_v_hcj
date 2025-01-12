<?php

$host = 'localhost';
$dbname = '';
$port = 3306;
$user = 'root';
$pw = '';

$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_PERSISTENT         => true
);

try {
    $db = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pw, $options);
     var_dump($db);
} catch (PDOException $e) {
    echo $e->getMessage();
    die("<br>Diese DB : $dbname existiert nicht");
}
