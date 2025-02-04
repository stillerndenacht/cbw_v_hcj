<?php
	
	$lang = $_COOKIE['lang'] ?? 'DE';	# Vorgabe DE wenn keine Sprache vorhanden
	
	if(isset($_POST['lang'])) {
		setcookie('lang', $_POST['lang'], time() + 3600 * 24 *30, '/');
		header('Location: setLanguage.php');
	}
	
	echo 'Aktuelle Sprache: <b>' . $lang . '</b><br><br>';
?>

<form action="" method="POST">

	<select name="lang">
		<option value="DE" <?php if($lang=="DE") echo "selected"?>>Deutsch</option>
		<option value="EN" <?php if($lang=="EN") echo "selected"?>>Englisch</option>
		<option value="FR" <?php if($lang=="FR") echo "selected"?>>Franzöisch</option>
	</select><input type="submit" value="Sprache wählen">
</form>
	
	
