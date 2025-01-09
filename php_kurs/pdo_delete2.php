<!-- damit das hier läuft muss pdo_dbthings_freunde.php über http://localhost/hcj_cbw/php_kurs/ aufgerufen werden. 
 Denn sonst gibt es die Datenbank nicht-->
<!-- dazu gehören pdo_selectAll2.php pdo_selectOne2.php ...-->
<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');

$id = $_GET['id'];
# echo $id;
$sql = 'DELETE FROM PDOFreunde WHERE id=?';
echo $sql;
$statement= $db->prepare($sql);
$statement->execute([$id]);


header('Location: pdo_selectAll2.php');
	die;