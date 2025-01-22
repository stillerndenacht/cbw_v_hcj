<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');
$sql = 'SELECT id, vorname, nachname, zeit FROM PDOFreunde ORDER BY id DESC';
$statement = $db->query($sql);

$freunde = $statement->fetchAll();
var_dump($freunde);

$json = json_encode($freunde);
var_dump($json);
$daten = json_decode($json);
var_dump($daten);


file_put_contents('files/freunde_json.txt', $json);
$array = json_decode(file_get_contents('files/freunde_json.txt'));
var_dump($array);

echo "<p>&euro;</p>";
echo "<p>&Auml;</p>";
echo "/u00fc";
