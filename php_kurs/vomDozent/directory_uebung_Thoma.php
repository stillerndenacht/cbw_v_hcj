<?php

	$starttime = microtime(true);
	
	
	$title 			= 'Erste Übung';
	$description 	= 'Meine Vorlage...';

	
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
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>