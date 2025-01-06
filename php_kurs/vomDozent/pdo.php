<?php


	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');				#DB auswählen
	
	$vname = 'Manfred NEU';
	
	
	#SQL-String "zusammenbauen"
	$sql = 'INSERT INTO Freunde
		(vorname, nachname, info, zeit)
	VALUES
		("'. $vname . '", "Thoma", "Langer Text...", ' . time() .');
';


#echo $sql;
#echo $db->exec($sql);

$sql = 'SELECT * FROM Freunde';

$stmt = $db->query($sql);

var_dump($stmt);


while($freund = $stmt->fetch()) 
	var_dump($freund);

/*var_dump($stmt->fetch()); /*
var_dump($stmt->fetch());
var_dump($stmt->fetch());
var_dump($stmt->fetch());
var_dump($stmt->fetch());
var_dump($stmt->fetch());
var_dump($stmt->fetch());
*/

 


	
	
	
	
	
	
	
	
	
	
	
	