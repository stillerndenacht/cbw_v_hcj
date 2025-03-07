<?php
		
	include_once 'includes/init_blog.inc.php';	
	
	$pagetitle = 'Login';
	$pagedescription = 'Beschreibung der Seite für Suchmaschinen';


	$blog = new Blog();
	
	$pwd = $_POST['pwd'] ?? "";
	
	$meldung = 'Geben Sie das korrekte Passwort ein:';
	
	
	if(isset($_POST['pwd']) && !$blog->islogin()) {
		
		if($blog->login($pwd)) {
			header('Location: ' . $_SERVER['PHP_SELF']);
			die;
		}
		
		$meldung = 'So geht das nicht! Passworteingabe wiederholen!';
		
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
			.formular {
				padding: 2em; 
				border: 2px solid #04AA6D; 
				margin-top: 2em; 
				background: #fff;
			}
			.formular input, .formular textarea { 
				font-family: arial; 
				font-size: 1.2em; 
				padding: 0.5em;
			}
		</style>
		
		
	</head>
	
	<body>

		<main>
			
			<?php include 'includes/header.inc.php'; ?>

			<?php include 'includes/menue.inc.php'; ?>
			
			
			<article>
			
				<h1>Anmelden (Login)</h1>
			
				<div class="formular">
			  
				  <?php if(!$blog->isLogin()) { ?>
					
						<form action='<?= $_SERVER['PHP_SELF'] ?>' method='post'>
						
							<p style="color: tomato"><i><?= $meldung ?></i></p>
							<p>
								<label for="pwd">Passwort:<br>
								<input type="password" id="pwd" name="pwd" required value="<?= $pwd ?>">
							</p>
							<p><input type="submit" value="Anmelden"></p>
					
						</form>
						
					<?php }  else { ?>
					
						<h2 style=" color: green">Sie sind angemeldet.</h2>
						<p>Vergessen Sie das <a href="blog_logout.php">Abmelden</a> nicht!</p>
					<?php } ?>
				
				</div>
				
				
				<p>
					<br>
					<a class="link" href="blog.php" title="Zurück in den Blog.">Zurück</a>
				</p>
			  
			</article>
			
			
			<?= $cookieConsent ?>
		
			<?php include 'includes/footer.inc.php'; ?>
		
		</main>
		
	
		
	</body>
	
</html>