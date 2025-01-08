<!-- damit das hier läuft muss pdo_dbthings_freunde.php über http://localhost/hcj_cbw/php_kurs/ aufgerufen werden. 
 Denn sonst gibt es die Datenbank nicht-->

 <?php $seitentitel = 'Freund:in aktualisieren' ?>
<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');

$id = $_GET['id'];
# echo $id;
$sql = 'SELECT id, vorname, nachname, info, zeit FROM PDOFreunde WHERE id=' . $id;
$statement = $db->query($sql);
$freund = $statement->fetch();
#var_dump($freund); # nur zum Test


header('Location: pdo_selectAll.php');
	die;