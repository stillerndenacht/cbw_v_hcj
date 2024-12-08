<?php

	# --------------------------------------------------
	# (E)ingabe
	# --------------------------------------------------
	$title 			= 'Kreisberechnung';
	$description 	= 'Einfache Kreisberechnungen.';
	
	$radius = 500;
	
	const PI = 3.1415926535898; 	# define('PI',3.1415926535898);
	$umfang = 0.;
	$flaeche = 0.;
		
	# --------------------------------------------------
	# (V)erarbeitung
	# --------------------------------------------------
	$umfang = 2 * PI * $radius;
	$flaeche = PI * $radius * $radius;
	
	
	
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
				<td><?= number_format($umfang, 2, ',', '.') ?> cm</td>
				<td><?= number_format($flaeche, 2, ',', '.') ?> cm²</td>
			</tr>
			
		</table>
	
	</article>
	
	
  </body>
 
  
</html>
