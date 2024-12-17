<?php

	$starttime = microtime(true);
	
	
	$title 			= 'Lottozahlengenerator';
	$description 	= 'Meine Vorlage...';
	
	include_once 'includes/lotto.inc.php';
	

	$lotto = lottozahlen();
	
	
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
			<?php echo implode(', ', $lotto) ?>
		</p>
		
		
		<?php 
	
			$anzahl = 0;
			
			#while($lotto != lottozahlen()) $anzahl++;
			
			$dauer = microtime(true) - $starttime;
			echo 'Anzahl Ziehungen: ' . number_format($anzahl, 0, ',', '.') . '<br />';
			echo 'Dauer in Sekunden: ' . number_format($dauer, 2, ',', '.') . ' sec<br />';
			echo 'Ziehungen / Sekunde: ' . number_format($anzahl/$dauer, 0, ',', '.');
		
		?>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>