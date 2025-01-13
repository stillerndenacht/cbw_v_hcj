<?php
include 'includes/PDOConnect.inc.php';
$db->exec('USE FAGPHP');
# PHP arbeitet mit Auto-commit d.h. alle Anweisungen werden sofort ausgeführt...
# dafür müssen aber alle Anweisungen korrekt funktionieren
$db->exec('DELETE FROM pdofreunde WHERE id=2');
# das folgende würde einen Fehler werfen, denn index 1 gibt es schon ...
$db->exec('INSERT INTO pdofreunde (vorname, nachname, id) VALUES ("das muss", "auch das",1');
# ... deswegen könnte man das so nicht ausführen d.h. auch die DELETE würde nicht ausgeführt werden


# DAFÜR GIBT ES TRANSACTION - welche Anweisungen erst nach der commit-Anweisung ausführt und über rollBack rückgängig machen kann..
$db->beginTransaction();
$db->exec('DELETE FROM pdofreunde WHERE id=2');
# diese Anweisung wird erst mit dem commit() ausgeführt
$db->commit();

$db->beginTransaction();
$db->exec('DELETE FROM pdofreunde WHERE id=2');
# diese Anweisung wird erst mit dem rollBack() rückgängig gemacht
$db->rollBack();

$db->beginTransaction();
try {

    $db->exec('DELE FROM pdofreunde WHERE id=2'); # das löst einen Fehler aus
    #$db->exec('DROP TABLE pdofreunde'); # ACHTUNG!!! Database-Definition-Anweisungen werden bei MySQL immmer sofort ausgeführt, und lassen sich nicht zurückrollen
    $db->exec('INSERT INTO pdofreunde (vorname, nachname, id) VALUES ("das muss", "auch das",2');
    # diese Anweisung wird erst mit dem commit() ausgeführt
    $db->commit();
} catch (PDOException $e) {
    echo $e->getMessage();
    $db->rollBack();
    echo "<br>Fehler rollBack ausgeführt...";
}
