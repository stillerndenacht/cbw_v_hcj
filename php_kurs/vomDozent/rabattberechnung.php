<?php
	
	$title 			= 'Rabattberechnung';
	$description 	= 'Beispiel für eine Rabattberechnung.';
	
	const MWST 		= 19;
	$einkaufspreis 	= 100;
	
	$bruttopreis	= 0.;
	$nettopreis		= 0.;
	$rabatt 		= 0.;
	$enthalteneMwSt = 0.;
	
	$zahlIstOk 		= false;
	
	
	if(is_numeric($einkaufspreis) && $einkaufspreis > 0) {
		
		$zahlIstOk = true;
		
		if($einkaufspreis >= 1000 && $einkaufspreis <= 3000) {
			$rabatt = $einkaufspreis / 100 * 3;
		} elseif($einkaufspreis > 3000 && $einkaufspreis < 5000) {
			$rabatt = $einkaufspreis / 100 * 5;
		} elseif($einkaufspreis >= 5000) {
			$rabatt = $einkaufspreis / 100 * 8;
		} 
		
		$bruttopreis = $einkaufspreis - $rabatt;
		$nettopreis = $bruttopreis * 100 / (100 + MWST);
		$enthalteneMwSt = $bruttopreis - $nettopreis;
	
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
		
		
		
		<?php if($zahlIstOk) { ?>
		
			<table border style="width: 100%">
					
				<tr>
					<td>Einkaufspreis</td>
					<td><?= number_format($einkaufspreis, 2, ',', '.') ?> EUR</td>
				</tr>
				
				<tr>
					<td>Rabatt</td>
					<td><?= number_format($rabatt, 2, ',', '.') ?> EUR</td>
				</tr>
				
				<tr>
					<td>Endpreis</td>
					<td><?= number_format($bruttopreis, 2, ',', '.') ?> EUR</td>
				</tr>
				
				<tr>
					<td>Netto</td>
					<td><?= number_format($nettopreis, 2, ',', '.') ?> EUR</td>
				</tr>
				<tr>
					<td>Enhaltene MwSt.</td>
					<td><?= number_format($enthalteneMwSt, 2, ',', '.') ?> EUR</td>
				</tr>
				
			</table>
			
		<?php } else { ?>
		
			<p style="background: red; padding: 1em; color: #fff">
				Fehler im System! Bitte wenden Sie sich an den Administrator!
			</p>
			
		<?php } ?>
		
	</article>
	
	
  </body>
 
  
</html>