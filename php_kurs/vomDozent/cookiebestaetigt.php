<?php

	$starttime = microtime(true);
	
	function setConsent($cookieda) {
		
		$msg = '';
		
		if(isset($_GET['set']) && !$cookieda) {
			setcookie('cookieok', 'ok', time() + 3600 * 24 * 30, '/');
			header('Location: ' . $_SERVER['PHP_SELF']);
			die;
		}
		
		if(!$cookieda) {
			$msg = '<div style="padding: 1em; background: pink; color: #000; 
					position: absolute; top: 0;">
					Cookies helfen bei der Bereitstellung dieser Inhalte. 
					Durch die Nutzung dieser <b>Webseite</b> erklären Sie sich damit einverstanden, dass wir Cookies setzen.<br /><br />
					<a href="' . $_SERVER['PHP_SELF'] . '?set">Verstanden</a>
					</div>';
		}
				
		return $msg;
	}
	

	$title 			= 'Cookiebestaetigt';
	$description 	= 'Meine Vorlage...';

	
	#$cookieda = $_COOKIE['cookieok'] ?? false;
	
	$msg = setConsent($cookieda= $_COOKIE['cookieok'] ?? false);

	
	
	/*
	if(isset($_GET['set']) && !$cookieda) {
		setcookie('cookieok', 'ok', mktime(23, 59, 59, 12, 31, 2025), '/');
		header('Location: ' . $_SERVER['PHP_SELF']);
		die;
	}
	*/
	/*
	$msg = "";
	if(!$cookieda) {
		$msg = '<div style="padding: 1em; background: pink; color: #000; 
				position: absolute; TOP: 0; margin-right: 0.5em;">
				Cookies helfen bei der Bereitstellung dieser Inhalte. 
				Durch die Nutzung dieser <b>Webseite</b> erklären Sie sich damit einverstanden, dass wir Cookies setzen.<br /><br />
				<a href="' . $_SERVER['PHP_SELF'] . '?set">Verstanden</a>
				</div>';
	}
	*/
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
	
  	<?= $msg ?>
	
	<article>
	
		<h1><?php echo $title; ?></h1>
		<p>
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
	</p>
		<p>
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
	</p>
		<p>
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
	</p>
	</article>
	


	<footer style="background: #ccc; text-align: right; padding: 0.3em">
		<?= number_format(microtime(true) - $starttime, 6, ',') . ' Sek'; ?>
	</footer>
	
	<!--?php if(!$cookieda) { ?>

		<div style="padding: 1em; background: pink; color: #000; 
					position: absolute; bottom: 0; margin-right: 0.5em;">
			
			Cookies helfen bei der Bereitstellung dieser Inhalte. 
			Durch die Nutzung dieser <b>Webseite</b> erklären Sie sich damit einverstanden, dass wir Cookies setzen.<br /><br />
			<a href="<?= $_SERVER['PHP_SELF'] ?>?set">Verstanden</a>
			
		</div>
	
	<!--?php } ?--> 
	
  </body>
 
  
</html>