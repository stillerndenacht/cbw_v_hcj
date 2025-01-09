<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');

# so wäre es gefährlich, weil das GET über eine Benutzereingabe kommt und dann direkt in ein SQL-Statement eingebaut wird - das lässt sich mit allen Kontrollfunktionen nicht 100% sicher gestalten - der Benutzer könnte über die Ergänzung der URL SQL-Injektion versuchen
$id = $_GET['id'];
$sql = 'DELETE FROM freunde WHERE id ='.$id;
$db->exec($sql);

# prepared Statements funktionieren nur für Werte - nicht für Tabellennamen oder Spaltennamen

# prepared mit ? als universeller Platzhalter
$id = $_GET['id'];
$vorname = $_GET['vorname'];
$array = array(2, "Manfred");
$array = array($id, $vorname);
$sql = 'DELETE FROM freunde WHERE id =? OR vorname =?';
$statement= $db->prepare($sql);
# beim execute werden die values des arrays ihrer Reihenfolge nach in das statement eingeordnet - wenn der Datentyp passt, wird das statement ausgeführt, sollte eine Injektion versucht werden und diese auf einen Datentyp string treffen, werden gefährliche Zeichen maskiert und so in die Datenbank geschrieben
$statement->execute($array);
var_dump($statement->fetch());

# oder man benutzt benannte parameter für das Array
$id = $_GET['id'];
$vorname = $_GET['vorname'];
$array = array(2, "Manfred");
$array = array('id' => $id, 'vn'=>$vorname);
# dann die Bennenung mit : eingetragen werden
$sql = 'DELETE FROM freunde WHERE id =:id OR vorname =:vn';
$statement= $db->prepare($sql);
# beim execute werden die values des arrays ihrer Bennenung nach in das statement eingeordnet - wenn der Datentyp passt, wird das statement ausgeführt, sollte eine Injektion versucht werden und diese auf einen Datentyp string treffen, werden gefährliche Zeichen maskiert und so in die Datenbank geschrieben
$statement->execute($array);
var_dump($statement->fetch());

# man kann auch das prepared statement auch mehrfach mit verschiedenen Daten ausführen
$sql = 'INSERT INTO Freunde (vorname, nachname, info, zeit) VALUES (?,?,?,?)';
$statement= $db->prepare($sql);
$statement->execute(["Prepa", "Ered","Statement ist doch super",time()]);
$statement->execute(["Supi", "Dupi","Dub di Dubi du",time()]);
$statement->execute(["Aloah", "Heee","Das ist doch alles wunderbar",time()]);

# man kann die values auch so zuweisen
# für assoziative arrays / benannte Platzhalter
$statement->bindValue('id',1);
# für universelle Platzhalter gilt die Positionszahl
$statement->bindValue(1,1);
$statement->execute();

$id = 1;
$statement->bindValue('id',$id);
$statement->execute();
# das funktioniert nicht, weil tatsächlich der Value in das Statement kommt und keine Referenz auf die Variable
$id = 2;
$statement->execute();
# dafür gibt es :
$statement->bindParam('id', $id);


# PREPARED STATEMENTS SCHÜTZEN NICHT GEGEN CROSS-SITE-SCRIPTING