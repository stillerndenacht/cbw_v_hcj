<!-- damit das hier läuft muss pdo_dbthings_freunde.php über http://localhost/hcj_cbw/php_kurs/ aufgerufen werden. 
 Denn sonst gibt es die Datenbank nicht-->

<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');

$id = $_GET['id'];
# echo $id;
$sql = 'DELETE FROM PDOFreunde WHERE id=' . $id;
echo $sql;
$db->query($sql);


header('Location: pdo_selectAll.php');
	die;