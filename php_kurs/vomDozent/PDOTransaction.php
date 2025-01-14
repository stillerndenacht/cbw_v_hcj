<?php

	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');						#DB auswählen
	

	$db->beginTransaction();
	
	try {
		
		$db->exec('DELETE FROM Freunde');
			
		$db->exec('INSERT INTO XXXXXX (vorname,nachname) VALUES ("DAS MUSS", "AUCH GEMACHT WERDEN")');

		$db->commit();
		
		echo 'Gesamte Transaktion wurde ausgeführt.';
		
	} catch (PDOException $e) {				# nur EXCEPTION geht i.d.F. auch!
		
		#echo $e->getMessage();
		$db->rollBack();
		
		echo "KEIN Sql-Statement wurde ausgeführt!";
	}
