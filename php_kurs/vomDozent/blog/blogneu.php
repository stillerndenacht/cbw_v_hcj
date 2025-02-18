<?php

	$starttime = microtime(true);

	include_once 'includes/blog_init.inc.php';
	
	$title 			= 'Neuer Blogeintrag';
	$description 	= 'Meine Vorlage...';

	$subject	= '';	
	$body		= '';
	$meldung 	= 'Füllen Sie das Formular bitte aus.';
	
	$blog = new Blog();
	
	if(!$blog->isLogin()) {
		header('Location: blogUebersicht.php');
		die;
	}
	
	
	if(isset($_POST['subject']) && isset($_POST['body'])) {
		
		$subject 	= ucfirst(trim(strip_tags($_POST['subject'])));
		$body 		= trim($_POST['body']);
		
		if(mb_strlen($subject) < 2) {
			
			$meldung = '<b style="color:red">Subject darf nicht leer sein und muss mindestens zwei Zeichen lang.</b>';
						
		} else {
			
			$blog->setItem($subject, $body, time());
			
			header('Location: blogShow.php?key=0');		# IST IMMER key=0 !!!!
			die;

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
			<?= $meldung ?>
		</p>
		
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
	
			Subject<span style='color:red'>*</span>:<br>
			<input type="text" name="subject" value="<?= $subject ?>"><br><br>
			Body:<br>
			<textarea cols="60" rows="10" name="body"><?= $body ?></textarea><br><br>
			
			<input type="submit" value="Absenden"><br><br>
	
		</form>
	
		<p>
			<a href="blogUebersicht.php">Zurück zur Übersicht</a>
		</p>

	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>