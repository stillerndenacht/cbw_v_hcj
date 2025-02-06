<?php

	session_start();
	
	include 'includes/PDOConnection.inc.php';
	$db->exec('USE FAG312');
	
	$starttime = microtime(true);
	
	$title 			= 'Login';
	$description 	= 'Meine Vorlage...';
	
	$login = $_SESSION['admin'] ?? false;
	
	$user 		= '';
	$pwd 		= '';
	$meldung 	= '';
	
	if(isset($_POST['user']) && isset($_POST['pwd']) && !$login) {
				
		$user = trim($_POST['user']);
		$pwd  = trim($_POST['pwd']);
		
		$stmt = $db->prepare('SELECT * FROM Admins WHERE name=:name');
		$stmt->execute(['name' => $user]);
		$admin = $stmt->fetch();
			
		if($admin !== false) {
			# name wurde gefunden!
			if(password_verify($pwd, $admin['pwd'])) {
				$_SESSION['admin'] = $user;
				header('Location: ' . $_SERVER['PHP_SELF']);
				die;
			}
		}
		
		$meldung = 'Username und/oder Passwort falsch';
		
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
		
		<p style="color: red"><?= $meldung ?></p>
		
		<?php if(!$login) { ?> 
		
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
				
				Username:<br>
				<input type="text" name="user" value="<?= $user ?>"><br><br>
				Password:<br>
				<input type="password" name="pwd" value="<?= $pwd ?>"><br><br>
				<input type="submit" value="Anmelden">
				<br><br>
				<hr>
			
			</form>
			
		<?php } else { ?>
		
			<p>
				Hallo <?= strtoupper($login) ?>, Sie sind angemeldet.<br /><br />
				
				<?php if($login == "master") { ?>
					<a href="adminRegistrieren.php">Neuen Admin registrieren</a><br>
				<?php } ?>
				<a href="adminTest.php">Liste aller Admins anzeigen</a><br>
			</p>
			<br />
			<hr />
			
		<?php } ?>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>