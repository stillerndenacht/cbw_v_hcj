<?php

	session_start();
	
	include 'includes/PDOConnection.inc.php';
	$db->exec('USE FAG312');
	
	$starttime = microtime(true);
	
	$title 			= 'Neuen Admin registrieren';
	$description 	= 'Meine Vorlage...';
	
	$login = $_SESSION['admin'] ?? false;
	
	$user 		= '';
	$pwd 		= '';
	$meldung 	= '';
	
	if(isset($_POST['user']) && isset($_POST['pwd']) && $login == "master") {
				
		$user = trim($_POST['user']);
		$pwd  = trim($_POST['pwd']);
		
		$sql = 'INSERT INTO Admins (name, pwd) VALUES (:name, :pwd)';
		$stmt = $db->prepare($sql);
		
		try {
			$stmt->execute(['name' => $user, 'pwd' => password_hash($pwd, PASSWORD_DEFAULT)]);
			header('Location: adminTest.php');
			die;
		} catch(PDOException $e) {
			$meldung = 'Admin bereits vorhanden!';
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
  
	<article>
	
		<h1><?php echo $title; ?></h1>
		
		<p style="color: red"><?= $meldung ?></p>
		
		<?php if($login == "master") { ?> 
		
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
				Sie sind nicht angemeldet oder Sie sind nicht der MASTER dieser Seite.<br><br>
				Wenn Sie sich bitte an den MASTER!<br><br>
				
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