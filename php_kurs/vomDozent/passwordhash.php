<?php

	$starttime = microtime(true);
	
	
	$title 			= 'PasswordHash';
	$description 	= 'Meine Vorlage...';

	/*
	$pwd = 'geheim';
	$pwdhash = md5($pwd);			# geheim
	
	echo $pwdhash .'<br>';
	
	$eingabe = 'geheim';
	
	if(md5($eingabe) == $pwdhash) 
		echo 'OK';
	else
		echo 'Nix gut';
	
	*/
	
	
	$pwdok = '$2y$12$Q3sThF.tIuHc/XyO/j.KaOhKEHBI13mVFmQETfYeLLYSCT16nU0ce';
	
	
	#$xx$10$
	# bis 350 ms ist OK;
	
	$pwdhash = password_hash('supergeheim', PASSWORD_DEFAULT, ['cost' => 12]);
	
	
	echo $pwdhash .'<br>';
	var_dump(password_verify('geheim1', $pwdok));
	
	
	
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
		
	
	
	</article>
	
	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
  </body>
 
  
</html>