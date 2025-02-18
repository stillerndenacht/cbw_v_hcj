<?php

	$starttime = microtime(true);
	
	include_once 'includes/blog_init.inc.php';
	
	$title 			= 'Blog';
	$description 	= 'Meine Vorlage...';
	
	$blog = new Blog();
	$key = $_GET['key'] ?? false;
	
	if($key !== false) 
		$item = $blog->getItem($key); 
	else 
		$item = false;
	
	#$blog->logout();
	
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
	
		
		
		<?php if($item) { ?>
		
			<h1><?= $item->getSubject() ?></h1>
			<small><?= date('d.m.Y H:i', $item->getDate()) ?></small>
			<p><?= nl2br($item->getBody()); ?></p>
			<hr>
			
			<?php if($blog->isLogin()) { ?>
				<p>
					<a href="blogEdit.php?key=<?= $key ?>">
						Eintrag bearbeiten
					</a><br>
					<a href="blogDelete.php?key=<?= $key ?>"
					   onclick='return confirm("Wirklich löschen?")'>
						Eintrag löschen
					</a>
				</p>
			<?php } ?>
				
		
		<?php } else { ?>
			
			<h1 style="color:red">Fehler beim Zugriff</h1>
			<p>
				Der gewünschte Eintrag wurde nicht gefunden. 
				Kehren Sie zurück und wiederholen den Vorgang.
			</p>
			
		<?php } ?>
		
		<p>
			<a href="bloguebersicht.php">Zurück zur Übersicht</a>
		</p>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>