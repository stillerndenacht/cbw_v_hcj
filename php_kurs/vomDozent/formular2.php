<?php

	$starttime = microtime(true);
	
	
	$title 			= 'Formularübung';
	$description 	= 'Meine Vorlage...';

	$vorname	= '';	
	$nachname	= '';
	$info		= '';
	
	$isOK		= false;			# Eingabe ist noch nicht OK
	$meldung	= '';
	
	
	if(isset($_POST['vorname']) && isset($_POST['nachname']) && isset($_POST['info'])) {
		
		$vorname 	= $_POST['vorname'];
		$nachname 	= $_POST['nachname'];
		$info 		= $_POST['info'];
	
	
		$vorname	= trim(strip_tags($vorname));		# Tags löschen und trimmen
		$nachname	= trim(strip_tags($nachname));
		$info		= trim($info);						# trimmen
		
		$vorname	= ucwords(strtolower($vorname));
		$nachname	= ucfirst(strtolower($nachname));
		
		
		if(strlen($vorname) < 2 || strlen($nachname) < 2) {
			
			$meldung = '<b>Vorname und Nachname dürfen nicht leer sein 
		                und müssen mindestens zwei Zeichen lang.</b>';
						
		} else {
			
			$isOK = true;								# Alles OK, Formular nicht mehr anzeigen
			
			$meldung = htmlspecialchars($vorname) . ' ' . 
			           htmlspecialchars($nachname) . '<br>' .
					   htmlspecialchars($info) . '<br><br>' .
					   '<a href="">Neu starten</a>';
		}
			
	} else {
	
		$meldung = 'Füllen Sie das Formular bitte aus.';
		
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
			<?= $meldung ?>
		</p>
		
		
		<?php if(!$isOK) { ?>
		
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		
				Vorname<span style='color:red'>*</span>:<br>
				<input type="text" name="vorname" value="<?= $vorname ?>"><br><br>
				
				Nachname<span style='color:red'>*</span>:<br>
				<input type="text" name="nachname" value="<?= $nachname ?>"><br><br>
				Info:<br>
				<textarea cols="40" rows="10" name="info"><?= $info ?></textarea><br><br>
				
				<input type="submit" value="Absenden"><br><br>
		
			</form>
			
		<?php } ?>
	
	

	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>