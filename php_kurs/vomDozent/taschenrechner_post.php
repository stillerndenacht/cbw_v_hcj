<?php

	$starttime = microtime(true);
	
	function adition($z1, $z2) {
		return $z1 + $z2;
	}
	
	function subtraktion($z1, $z2) {
		return $z1 - $z2;
	}
	
	function multiplikation($z1, $z2) {
		return $z1 * $z2;
	}
	
	function division($z1, $z2) {
		if($z2 == 0) return 'Teilen durch Null nicht erlaubt';
		return $z1 / $z2;
	}
	
	
	$title 			= 'Taschenrechner';
	$description 	= 'Meine Vorlage...';
	
	$zahl1 = 0;
	$zahl2 = 0;
	$operartor = '+';
	
	$meldung = '';
	
	if(isset($_POST['zahl1']) && isset($_POST['zahl2']) && isset($_POST['operator'])) {
		
		$zahl1 = $_POST['zahl1'];
		$zahl2 = $_POST['zahl2'];
		$operator = $_POST['operator'];
		
		if(is_numeric($zahl1) && is_numeric($zahl2)) {
			
			# Mal mit Match gemacht :-)
			$erg = match($operator) {
				'+' => adition($zahl1, $zahl2),
				'-' => subtraktion($zahl1, $zahl2),
				'*' => multiplikation($zahl1, $zahl2),
				'/' => division($zahl1, $zahl2),
				default => 'Operator unbekannt'
			};
			
			$meldung = "$zahl1 $operator $zahl2 = $erg";
			
		} else {
			$meldung = "Zahl1 und Zahl2 müssen Zahlen sein!";
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
		
		<p>
			<b><?= $meldung ?></b>
		</p>
		
		
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	
			Zahl1<br>
			<input type="text" name="zahl1" value="<?= $zahl1 ?>"><br><br>
			
			Zahl2:<br>
			<input type="text" name="zahl2" value="<?= $zahl2 ?>"><br><br>
			
			Operartor:<br>
			<!-- Das ist einwenig doof, damit der Operator erhalten bleibt. Oder? -->
			<select name="operator">
				<option value="+" <?php if($operator == '+') echo 'selected' ?>>Adition</option>
				<option value="-" <?php if($operator == '-') echo 'selected' ?>>Subtraktion</option>
				<option value="*" <?php if($operator == '*') echo 'selected' ?>>Multiplikation</option>
				<option value="/" <?php if($operator == '/') echo 'selected' ?>>Division</option>
			</select>
			
			<input type="submit" value="Berechnen"><br><br>
	
		</form>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>