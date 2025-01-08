<?php

	$starttime = microtime(true);
	
	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	$title 			= 'Meine Freunde :-)';
	$description 	= 'Meine Vorlage...';
	
	$sql = 'SELECT id, vorname, nachname, zeit FROM Freunde ORDER BY id DESC';
	
	
	$stmt = $db->query($sql);
	$freunde = $stmt->fetchAll();
	$anzahl = count($freunde);
	
	
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
		
		<p><?= "Anzahl: $anzahl" ?></p>
		
		
		<?php if($anzahl > 0 ) : ?>
		
			<table style="width: 100%" border>
		
				<tr>
					<th></th>
					<th>Vorname</th>
					<th>Nachname</th>
					<th>Zeit</th>
				</tr>
				
				<?php foreach($freunde as $freund) : ?>
				
					<tr>
						<td>
							<a href="PDOSelectOne.php?id=<?= $freund['id'] ?>">Anzeigen</a>
						</td>
						<td><?= htmlspecialchars($freund['vorname']) ?></td>
						<td><?= htmlspecialchars($freund['nachname']) ?></td>
						<td><?= date("d.m.Y H:i:s", $freund['zeit']) ?></td>
					</tr>
				
				<?php endforeach; ?>
				
			</table>
			
		<?php endif; ?>
		
		<p>
			<a href="PDOInsert.php">Neuen Freund einfügen</a>
		</p>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>