<?php


	session_start();
		
	$starttime = microtime(true);
	
	include 'includes/PDOConnection.inc.php';
	
	$db->exec('USE FAG312');
	
	$title 			= 'Admins';
	$description 	= 'Meine Vorlage...';
	
	$login = $_SESSION['admin'] ?? false;
	
	if($login) {
		$stmt = $db->query('SELECT * FROM Admins ORDER BY name');
		$admins = $stmt->fetchAll();
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
		
	
		
		<?php 
			
			if($login) {
				foreach($admins as $admin) echo $admin['name'] . '<hr>'; 
			} else {
		?>
		
		<p style="color: red">Sie müssen angemeldet sein!</p>
		
			<?php } ?>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>