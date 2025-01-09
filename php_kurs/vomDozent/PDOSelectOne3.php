<?php     
	
	$starttime = microtime(true);
	
	include_once 'includes/PDOConnection.inc.php';
	
	$title 			= 'Eintrag';
	$description 	= 'Beschreibung...';
	
	$db->exec('USE fag312');
	
	# ----------------------------------
	$isOk 	= false;							# Wenn true, wurden Daten geladen/gefunden sonst false
	$id 	= $_GET['id'] ?? false;				# mit isset Prüfung!, wenn id nicht vorhanden = false
	# ----------------------------------


	if($id !== false && is_numeric($id)) {	# wenn nicht ID vorhanden und auch numerisch ist
			
		#$id = intval($id);					# ggf. noch machen um sicher einen integerwert zu haben			 
		
/*		
		$sql = 'SELECT CONCAT(vorname, " ", nachname) AS fullname, info, zeit FROM Freunde WHERE id=' . $id;
		$stmt = $db->query($sql);		
*/		
		
		
		$sql = 'SELECT CONCAT(vorname, " ", nachname) AS fullname, info , zeit FROM Freunde WHERE id=:id';
		$stmt = $db->prepare($sql);
		$stmt->bindValue('id', $id);
		$stmt->execute();
		
		$freund = $stmt->fetch();
				
		if($freund !== false) {				# TRUE wenn gefunden!!!
			
			$isOk = true;					# Alles OK, habe Daten, können angezeigt werden!!!!
			
			$fullname = htmlspecialchars($freund['fullname']);
			$info = $freund['info'];
			$zeit = $freund['zeit'];
			
			if(empty($info)) 
				$info = '[Keine Infos vorhanden]'; 
			else 
				$info = nl2br(htmlspecialchars($info));		# newline \n\r in <br> umwandeln
		} 
		
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
	
		<?php if($isOk) { ?>
		
			<h1><?= $fullname ?></h1>
			<span><?= date('d.m.Y H:i:s', $zeit) ?></span>
			
			<p style="padding: 1.5em; background: #eee; line-height:1.3em">
				<?= $info ?>
			</p>
			
			<p>
				<a href="PDODelete.php?id=<?= $id ?>" 
				   onclick="return confirm('Löschen?');">
				   Freund löschen
				</a>
				<br>
				<a href="PDOUpdate.php?id=<?= $id ?>">
				   Freund bearbeien
				</a>
			</p>
			
				
		<?php } else { ?>
		
			<h1>Freund nicht vorhanden</h1>
			<p style="padding: 1.5em; background: pink">
				Diese Seite wurde unerwartet oder fehlerhaft aufgerufen!<br><br>
				Kehren Sie bitte <a href="PDOSelectAll.php">zurück zur Übersicht</a> 
				und wiederholen den Vorgang.
			</p>
		
		<?php } ?>
			
		
		<hr>
		<p>
			<a href="PDOSelectAll.php">Zurück zur Übersicht</a>
		</p>
		
		<p style="text-align: right; background: #ccc; padding: 0.5em">
			<?php echo number_format(microtime(true) - $starttime, 7, ',') ?> sec
		</p>
		
	</body>
	
</html>