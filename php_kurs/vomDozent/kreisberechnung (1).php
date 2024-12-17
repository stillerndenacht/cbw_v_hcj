<?php

	include '../includes/kreisfunktionen.inc.php';
	

	# --------------------------------------------------
	# (E)ingabe
	# --------------------------------------------------
	$title 			= 'Kreisberechnung';
	$description 	= 'Einfache Kreisberechnungen.';
	
	$radius = 90;
	
	
	
	
	
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
		
		<table border style="width: 100%">
	
			<tr>
				<th>Radius</td>
				<th>Umfang</th>
				<th>Fläche</th>
			</tr>
			
			<tr>
				<td><?= $radius ?> cm</td>
				<td><?= number_format(kreisumfang($radius), 2, ',', '.') ?> cm</td>
				<td><?= number_format(kreisflaeche($radius), 2, ',', '.') ?> cm²</td>
			</tr>
			
		</table>
	
	</article>
	
	
  </body>
 
  
</html>
