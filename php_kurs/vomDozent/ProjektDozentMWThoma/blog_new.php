<?php
		
	include_once 'includes/init_blog.inc.php';	
	
	include_once 'includes/sendEmail.inc.php';
	
	$pagetitle = 'Neuer Blog-Eintrag';
	$pagedescription = 'Beschreibung der Seite für Suchmaschinen';


	$blog = new Blog();
	
	# --------------------------------------------------------	
	# Ende wenn nicht angemeldet
	# --------------------------------------------------------
	if(!$blog->isLogin()) {
		header('Location: blog.php');
		die;
	}
	# --------------------------------------------------------
	
	$subject = '';
	$body = '';
	$meldung = '';
	
	if(isset($_POST['subject']) && isset($_POST['body'])) {
		
		$subject = trim($_POST['subject']);
		$body = trim($_POST['body']);
		
		# --------------------------------------------------------
		# Wenn Subject angegeben 
		# --------------------------------------------------------
		if(!empty($subject)) {
			
			$lastid = $blog->newItem($subject, $body);
			
			sendEmail('manfred.walter.thoma@gmail.com',
			          'Neuer Blogbeitrag: ' . $subject,
					  $body);
					  
			header('Location: blog_detail.php?id=' . $lastid);
			die;
		} else {
			$meldung = 'FEHLER: Subject darf nicht leer sein!';
		}
		#--------------------------------------------------------
		
	}
	
	
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
			div {
				padding: 2em; 
				border: 2px solid #04AA6D; 
				margin-top: 2em; 
				background: #fff;
			}
			input, textarea { 
				font-family: arial; 
				font-size: 1.2em; 
				padding: 0.5em;
			}
			
			textarea { width: 100%;}
		</style>
		
		
	</head>
	
	<body>

		<main>
			
			<?php include 'includes/header.inc.php'; ?>

			<?php include 'includes/menue.inc.php'; ?>
			
			
			<article>
			
				<h1>Neuer Blog-Beitag</h1>
			  
				<div>
			  
					<form action='<?= $_SERVER['PHP_SELF'] ?>' method='post'>
						
						<p style="color: red; font-size: 1.2em"><?= $meldung ?></p>
						
						<p>
							<label for="subject">Subject:</label><br>
							<input type="text" name="subject" id="subject" style="width:70%;" maxlength="80" value="<?= $subject; ?>">
						</p>
						
						<p>
							<label for="body">Body:<br>
							<textarea name="body" id="body" rows="10"><?= $body;?></textarea>
						</p>
						<p>
							<input type='submit' value='Speichern'>
						</p>
					
					</form>
					
				</div>
			  
			</article>
			
			
			<?= $cookieConsent ?>
		
			<?php include 'includes/footer.inc.php'; ?>
		
		</main>
		
	
		
	</body>
	
</html>