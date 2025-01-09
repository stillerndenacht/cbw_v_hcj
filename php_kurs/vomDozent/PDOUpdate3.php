<?php

	$starttime = microtime(true);
	
	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');						#DB auswählen
	
	$title 			= 'PDOUpdate';
	$description 	= 'Beschreibung der Seite....';

	$vorname	= '';	
	$nachname	= '';
	$info		= '';
	$meldung	= 'Füllen Sie das Formular bitte aus.';
		
	$id = $_GET['id'] ?? false;
	
	if($id && is_numeric($id)) {
		
		#echo "Die Seite wurde mit GET aufgerufen";
		
		$sql = "SELECT * FROM Freunde WHERE id=" . $id;
		
		$stmt = $db->query($sql);
		$freund = $stmt->fetch();
		
		if($freund  === false) {
			header('Location: PDOSelectAll.php');
			die;
		}
			
		$vorname 	= $freund['vorname'];
		$nachname 	= $freund['nachname'];
		$info 		= $freund['info'];
		
		
	} elseif(isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['info']) && isset($_POST['id'])) {
		
		#echo "Die Seite wurde per POST aufgerufen";
		
		$vorname 	= $_POST['vorname'];
		$nachname 	= $_POST['nachname'];
		$info 		= $_POST['info'];
		$id 		= $_POST['id'];
		
		
		$vorname	= trim(strip_tags($vorname));		
		$nachname	= trim(strip_tags($nachname));
		$info		= trim($info);					
		
		$vorname	= ucwords(strtolower($vorname));
		$nachname	= ucfirst(strtolower($nachname));
		
		
		if(strlen($vorname) < 2 || strlen($nachname) < 2) {
			
			$meldung = '<b>Vorname und Nachname dürfen nicht leer sein 
		                und müssen mindestens zwei Zeichen lang.</b>';
						
		} else {
			
			/*
			$sql = "UPDATE Freunde SET vorname='$vorname', nachname='$nachname', info='$info' WHERE id=" . $id;
			$db->exec($sql);
			*/
			
			$daten = array(
						'vn' 	=> $vorname,
						'nn' 	=> $nachname,
						'info' 	=> $info,
						'id' 	=> $id);
						
					
			$sql = "UPDATE Freunde SET vorname=:vn, nachname=:nn, info=:info WHERE id=:id";
			$stmt = $db->prepare($sql);
			$stmt->execute($daten);
			
			header('Location: PDOSelectOne.php?id=' . $id);
			die;
		}
		
	} else {
		
		#echo "Die Seite wurde weder per GET noch per POST aufgerufen. FEHLER!!!";
		header('Location: PDOSelectAll.php');
		die;
		
	}
	
	
	
?>
<!DOCTYPE html>
<html lang="de">

  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description; ?>">
	<title><?php echo $title; ?></title>
  </head>
 
  <body>

	<article>
	
		<h1><?php echo $title; ?></h1>
		
		<p>
			<?= $meldung ?>
		</p>
				
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		
			<input type="hidden" name="id" value="<?= $id ?>">
	
			Vorname<span style='color:red'>*</span>:<br>
			<input type="text" name="vorname" value="<?= $vorname ?>"><br><br>
			
			Nachname<span style='color:red'>*</span>:<br>
			<input type="text" name="nachname" value="<?= $nachname ?>"><br><br>
			Info:<br>
			<textarea cols="40" rows="10" name="info"><?= $info ?></textarea><br><br>
			
			<input type="submit" value="Absenden"><br><br>
	
		</form>
		
		<p>
			<a href="PDOSelectAll.php">Zurück zur Übersicht</a>
		</p>

	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>