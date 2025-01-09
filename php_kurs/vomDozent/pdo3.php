<?php


	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');				#DB auswählen
	
	
	
	try {
		
		echo $db->exec('DELTE FROM Freunde WHERE id=9000');
		
	} catch(PDOException $e) {
		#echo $e->getMessage();
	}
	
	var_dump($db->errorInfo());
	
	
	
	die;
	
	
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

#echo count($freunde);



foreach($freunde as $freund)
	echo $freund['vorname'] . '<br>';
	
	
# (D)elete  CRU(D)
#echo $db->exec('DELETE FROM Freunde WHERE id=9');



# (U)date  CR(U)D
$sql = 'UPDATE Freunde  SET vorname="NEU VN", nachname="Neu NN", info ="NEU INFO" WHERE id=1';

#echo $db->exec($sql);
