<?php 
session_start();
$seitentitel = 'Session Erfolgreicher Logout' ?>
<?php

$starttime = microtime(true);
?>
<?php
var_dump($_SESSION);
$loginname = $_SESSION['loginname'] ?? false;
if ($_SESSION['loginname']) {
    unset($_SESSION['loginname']);
    #header($_SERVER['PHP_SELF']);
}
var_dump($_SESSION);
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
    <?php if ($loginname) {?>

        <p>Sie haben sich erfolgreich ausgeloggt</p>
        <button><a href="login_sessioaufg.php">ZUM LOGIN</a></button>

    <?php } else { ?>
        <p>Sie sind nicht eingeloggt</p>
        <button><a href="login_sessioaufg.php">ZUM LOGIN</a></button>
    <?php } ?>


</body>

</html>