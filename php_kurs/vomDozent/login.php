<?php

	$starttime = microtime(true);
	#var_dump($_COOKIE);
	
	$title 			= 'Login';
	$description 	= 'Meine Vorlage...';
	
	$users = ['klaus' => 'geheim',
	         'meimei' => 'supergeheim',
			 'renate' => 'echtgeheim'
			 ];

	$login = $_COOKIE['admin'] ?? false;
	
	$user 		= '';
	$pwd 		= '';
	$meldung 	= '';
	
	
	if(isset($_POST['user']) && isset($_POST['pwd']) && !$login) {
				
		$user = trim($_POST['user']);
		$pwd  = trim($_POST['pwd']);
		
		if(isset($users[$user]) && $users[$user] == $pwd) {
			setcookie('admin', $user, 0, '/');
			header('Location: ' . $_SERVER['PHP_SELF']);
			die;
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
				Vergessen Sie nicht sich wieder als Admin 
				<a href="logout.php">abzumelden</a>!
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