<?php
include 'includes/PDOConnect.inc.php';
$db->exec('USE FAGPHP');

$zeit = time();
$db->beginTransaction();
try {
    $zeit = time();
    echo "<br>";
    echo $zeit;
    $sql = 'INSERT INTO pdofreunde (vorname, nachname, info, zeit) VALUES ("Erster","Insert","über eine Transaction",'.$zeit.')';
    echo "<br>";
    echo $sql;
    $db->exec($sql);
    echo "<br>";
    $zeit = time()+5;    
    echo $zeit;
    $db->exec('INSERT INTO pdofreunde (vorname, nachname, info, zeit) VALUES ("Zweiter","Insert","über die gleiche Transaction",'.$zeit.')');
    
    $db->commit();
} catch (PDOException $e) {
    echo $e->getMessage();
    
    $db->rollBack();
    echo "<br>Fehler rollBack ausgeführt...";
}
