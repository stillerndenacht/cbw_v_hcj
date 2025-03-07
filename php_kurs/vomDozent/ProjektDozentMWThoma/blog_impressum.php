<?php
		
	include_once 'includes/init_blog.inc.php';	
	
	$pagetitle = 'Impressum';
	$pagedescription = 'Beschreibung der Seite für Suchmaschinen';

	$impressum = nl2br(file_get_contents('daten/impressum.txt'));
	
	$blog = new Blog();
	
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?= $pagedescription ?>">
		<title><?= $pagetitle ?></title>
		
		<script src="js/script.js"></script>
		<link rel="stylesheet" href="css/blog.css">
		
		
	</head>
	
	<body>

		<main>
			
			<?php include 'includes/header.inc.php'; ?>

			<?php include 'includes/menue.inc.php'; ?>
			
			
			<article>
			
				<h1>Impressum</h1>
			  
				<?= $impressum ?>
			 
				<br><br>
				<hr>
				<p>
					<a class="link" href="index.php" title="Zur Startseite.">Home</a>
					<a class="link" href="blog_datenschutz.php" title="Zum Datenschutz.">Datenschutz</a>
				</p>
			  
			</article>
			
			
			<?= $cookieConsent ?>
		
			<?php include 'includes/footer.inc.php'; ?>
		
		</main>
		
	
		
	</body>
	
</html>