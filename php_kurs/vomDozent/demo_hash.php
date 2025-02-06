<?php

	session_start();
	
	$starttime = microtime(true);
	
	$title 			= 'Login';
	$description 	= 'Meine Vorlage...';
	
	$name = 'klaus';
	$hash = '$2y$10$eaMVm3TWiV2XXdZN6rUvgOMcoBsrMDXol0SN6I7yyRDK9rqDUDHVK';
	
	#var_dump(password_get_info($hash));
	
	$user = '';
	$pwd = '';
	
	if(isset($_POST['user']) && isset($_POST['pwd'])) {
		
		#echo $_POST['user'] . '<br>' . $_POST['pwd'];
		
		if($_POST['user'] == $name && password_verify($_POST['pwd'], $hash)) {
			
			if(password_needs_rehash($hash, PASSWORD_DEFAULT, ['cost' => 12])) {
				
				$hash = password_hash($_POST['pwd'], PASSWORD_DEFAULT, ['cost' => 12]);
				echo $hash . '<br>Das in die DB speichern für Klaus<br>';
				
			}
			
			echo 'OK';
			
			
		} else {
			
			
			echo 'Stimmen nicht überein';
			
			
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
		
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
			
			Username:<br>
			<input type="text" name="user" value="<?= $user ?>"><br><br>
			Password:<br>
			<input type="password" name="pwd" value="<?= $pwd ?>"><br><br>
			<input type="submit" value="Anmelden">
			<br><br>
			<hr>
		
		</form>
			
		
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>