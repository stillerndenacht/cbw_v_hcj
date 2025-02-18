<?php

	$starttime = microtime(true);
	
	include_once 'includes/blog_init.inc.php';
	
	$title 			= 'Blog';
	$description 	= 'Meine Vorlage...';
	
	$blog = new Blog();
	
	
	
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
	
		<h1><?php echo $title ?> </h1>
		
		<p>Einträge im Blog: <?= $blog->countItems() ?></p>
		
		<table style="width: 100%" border>
		
			<?php foreach($blog->getItems() as $key => $item) { ?>
			
				<tr>
					<!--td><?= $key ?></td-->
					<td>
						<a href="blogShow.php?key=<?= $key ?>">
							<?= $item->getSubject() ?>
						</a>
					</td>
					<td><?= $item->getBody(50) ?></td>
					<td><?= date('d.m.Y H:i',$item->getDate()) ?></td>
				</tr>
			<?php } ?>
		</table>
		
		<?php if($blog->isLogin()) { ?>
			<p>
				<a href="blogNeu.php">Neuen Blogeintrag anlegen</a><br><br>
				<a href="blogLogout.php" style="color: red">Abmelden (Logout)</a><br>
			</p>
		<?php } else {?>
			<p>
				<a href="blogLogin.php" style="color: rblue">Anmelden (Login)</a><br>
			</p>
		<?php } ?>
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>