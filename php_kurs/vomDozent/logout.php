<?php

	$starttime = microtime(true);
	#var_dump($_COOKIE);
	
	$title 			= 'Logout';
	$description 	= 'Meine Vorlage...';

	$login = $_COOKIE['admin'] ?? false;
	
	$meldung = '';
	
	if($login) {
		setcookie('admin', '', 0, '/');
		$meldung = strtoupper($login) . ', Sie haben sich abgemeldet!<br><br>';
	} else {
		$meldung = 'Sie müssen sich erst anmelden!<br><br>';
	}
	
	$meldung .=  '<a href="login.php">Jetzt anmelden</a><hr>';
	
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
		
		<?= $meldung ?>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>