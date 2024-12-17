<?php

	$starttime = microtime(true);
	
	
	$title 			= 'Formularübung';
	$description 	= 'Meine Vorlage...';

	var_dump($_GET);
	
	var_dump($_POST);


	
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
		
		
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	
			Vorname:<br>
			<input type="text" name="vorname" value=""><br>
			Nachname:<br>
			<input type="text" name="nachname" value=""><br><br>
			
			<textarea cols="40" rows="10" name="info"></textarea><br><br>
			
			<input type="submit" value="Absenden"><br><br>
	
		</form>
	
	

	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>