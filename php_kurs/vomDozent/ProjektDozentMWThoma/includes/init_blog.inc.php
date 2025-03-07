<?php

	session_start();
	
	error_reporting(E_ALL);

	function autoloader($klasse) {
		
		$datei = 'classes/' . $klasse . '.class.php';
		
		if (file_exists($datei)) {
			include_once $datei;
		} else {
			echo '<p style="color: red">Konnte Klasse "' . $klasse . '" nicht laden.</p>';
			die;
		}
		
	}

	spl_autoload_register('autoloader');
	
		
	# ------------------------------------------------------
	# COOKIE-CONSENT
	# ------------------------------------------------------
	
	$cookieda = $_COOKIE['cookieok'] ?? false;
	
	if(isset($_GET['cookieconsent']) && !$cookieda) {
		setcookie('cookieok', 'ok', time() + 86400 * 30, '/');
		header('Location: ' . $_SERVER['PHP_SELF']);
		die;
	}
	
	$cookieConsent = '';
	
	if(!$cookieda) { 

		$cookieConsent = '<div class="cookie-consent">
		<p>
			Cookies helfen bei der Bereitstellung dieser Inhalte. 
			Durch die Nutzung dieser Webseite erklären Sie sich damit 
			einverstanden, dass wir Cookies setzen.<br><br>
			<a href="?cookieconsent" title="Cookies bestätigen.">Verstanden</a>
		</p>		
		</div>';
		
	}

	# ------------------------------------------------------
	