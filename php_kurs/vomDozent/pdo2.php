<?php


	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');				#DB auswählen
	
	
	$vname = 'Manfred NEU TEST';
	
	
	#SQL-String "zusammenbauen"  (C)reate  (C)RUD
	$sql = 'INSERT INTO Freunde
		(vorname, nachname, info, zeit)
	VALUES
		("'. $vname . '", "Thoma", "Langer Text...", ' . time() .');
';


#echo $sql;
#echo $db->exec($sql);

#echo 'Alles GUT!';
 
 
 
 
# Statement für (R)ead C(R)UD

$sql = 'SELECT * FROM Freunde';

$stmt = $db->query($sql);


/*

while($freund = $stmt->fetch()) {
	
	echo $freund['vorname'] . '<br>';
	
	var_dump($freund);
	
	
	
}
*/

$freunde = $stmt->fetchAll();

echo count($freunde);



foreach($freunde as $freund)
	echo $freund['vorname'] . '<br>';
	

	
	
# HIER habe ich alles mit den Daten gemacht!!!!!




# Es geht noch weiter....



