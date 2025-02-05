<?php $seitentitel = 'Login Formular (mit Security)' ?>
<?php
$starttime = microtime(true);
?>
<?php

$name = "";
$pw = "";
$users = ['usera' => 'password', 'userb' => 'pass!word', 'userc' => 'pässwörd'];
$msg = "Bitte melden Sie sich an!";



if ($_COOKIE['login']) {
    setcookie('login', '', 0, '/');
    #header('LOCATION:'.$_SERVER['PHP_SELF']);
}
$login = $_COOKIE['login'] ?? false;

echo   '<hr>--- Ausgabe des var_dump COOKIE ---<br> ';
var_dump($_COOKIE);
echo   '<hr>--- Ausgabe des var_dump POST ---<br> ';
var_dump($_POST);
echo   '<hr>--- Ausgabe des var_dump $login ---<br> ';
var_dump($login);




#------- was im POST? ------------
if (isset($_POST['name']) && isset($_POST['pw'])) {

    $name = htmlspecialchars($_POST['name']);
    $pw = htmlspecialchars($_POST['pw']);
    $msg = "";
    #var_dump($_POST);
    #header('Location: login_in_aufg.php');
}

# ------- passt der POST zu User -----
if (isset($users[$name]) && $users[$name] == $pw) {

    setcookie('login', 'in', 0, '/');
    header('Location: logout_aufg.php');
    die;
} else {
    setcookie('login', '', 0, '/');
    #$msg = "Fehler bei der Anmeldung!";
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
        label {
            font-size: 12px;
            margin-bottom: 0px;
        }

        #name,
        #pw {
            color: darkmagenta;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>




    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

        <?php if (!$login) { ?>
            <p><?= $msg ?></p>
            <table>
                <tr>
                    <td>
                        <label for="name">Anmeldename </label><br />
                        <input type="text" name="name" id="name" required />
                    </td>
                    <td>
                        <label for="pw">Passwort </label><br />
                        <input type="text" name="pw" id="pw" required />
                    </td>
                </tr>
            </table>

            <input type="submit" value="Absenden" />
            <input type="reset" value="Zurücksetzen" />

        <?php } else {
setcookie('login', '', 0, '/');
            $msg = "Sie haben sich erfolgreich ausgeloggt";

            var_dump($_COOKIE);
            var_dump($login);
        ?>
            <p><?= $msg ?></p>
            <button><a href="login_aufg.php">ZURÜCK ZUM LOGIN</a></button>

        <?php } ?>

    </form>

    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>

</body>

</html>