<?php $seitentitel = 'Erfolgreicher Logout' ?>
<?php

$starttime = microtime(true);
?>
<?php

$loginname = $_COOKIE['loginname'] ?? false;
if (@$_COOKIE['loginname']) {
    setcookie('loginname', '', 0, '/');
    header($_SERVER['PHP_SELF']);
}
#var_dump($_COOKIE);
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
    <?php if ($loginname) {
        #setcookie('loginname', '', 0, '/');
    ?><p>Sie haben sich erfolgreich ausgeloggt</p>
        <button><a href="login_aufg.php">ZUM LOGIN</a></button>

    <?php } else { ?>
        <p>Sie sind nicht eingeloggt</p>
        <button><a href="login_aufg.php">ZUM LOGIN</a></button>
    <?php } ?>


</body>

</html>