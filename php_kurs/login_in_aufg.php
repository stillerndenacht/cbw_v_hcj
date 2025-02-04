<?php $seitentitel = 'Erfolg im Login Formular' ?>
<?php

$starttime = microtime(true);
?>
<?php
function logout(){
    setcookie('login', '', 0, '/');
    header('Location: login_aufg.php');
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo $seitentitel ?></title>
    <style>
                
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <p>Sie haben sich erfolgreich eingeloggt</p>
    <!-- <button><a href="login_aufg.php">AUSLOGGEN</a></button> -->
    <button onclick="<?php logout(); ?>"></button>

    </body>

</html>