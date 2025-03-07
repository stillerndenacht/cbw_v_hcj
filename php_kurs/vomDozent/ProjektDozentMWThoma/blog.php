<?php
		
	include_once 'includes/init_blog.inc.php';	
	
	$pagetitle = 'Startseite';
	$pagedescription = 'Beschreibung der Seite für Suchmaschinen';


	$blog = new Blog();
		
	$alle = $blog->getAllItems();
	
	$countAll = $blog->countAllItems();
	$countFree = $blog->countFreeItems();
	


	
	
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
		
		<!-- Seitenspezifische Anpassung CSS -->
		<style>
			.lock {
				border: 4px solid red;
				background: #ccc;
				padding: 1em;
				margin: 1em 0 1em 0;}
		</style>
		
		
	</head>
	
	<body>

		<main>
			
			<?php include 'includes/header.inc.php'; ?>

			<?php include 'includes/menue.inc.php'; ?>
			
			
			<article>
			
				<h1>Das ist meine Musik (<?= $countFree ?>)</h1>
				<hr>
				<small><?= $countAll;?> Einträge sind vorhanden, davon sind aber noch <?= $countAll - $countFree?> gesperrt.</small>
				<hr>
				
			  
				<?php foreach($alle as $item) { 
					$class = '';
					if(!$item->isFree()) $class='lock';
				?>
				
					<section class="<?= $class ?>">	
						<h2>
							<a href="blog_detail.php?id=<?= $item->getID() ?>" title="Blogeintrag anzeigen.">
								<?= $item->getSubject(); ?>
								
							</a>
							 <?= $item->getStars() ?>
						</h2>
						<p>
							<small><?= date('d.m.Y H:i', $item->getCreateDate()) ?></small>
						</p>
						<div><?= $item->getBody(300, true) ?></div>
						<br>
						<hr>
					</section>
				
				<?php } ?>
				
				<p>
					
					<a class="link" href="index.php" title="Zurück zur Startseite.">Home</a>
				</p>
			  
			</article>
			
			
			<?= $cookieConsent ?>
		
			<?php include 'includes/footer.inc.php'; ?>
		
		</main>
		
	
		
	</body>
	
</html>