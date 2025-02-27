<?php $seitentitel = 'Login Formular (mit Security)' ?>
<?php
$starttime = microtime(true);
?>
<?php

$name = "";
$pw = "";
$users = ['usera' => 'password', 'userb' => 'pass!word', 'userc' => 'pässwörd'];
$msg = "Bitte melden Sie sich an!";

$loginname = $_COOKIE['loginname'] ?? false;
var_dump($_COOKIE);

#------- was im POST? ------------
if (isset($_POST['name']) && isset($_POST['pw'])) {

    $name = htmlspecialchars($_POST['name']);
    $pw = htmlspecialchars($_POST['pw']);
    $msg = "";
    
#------- passt der Post zum Userarray
    if (isset($users[$name]) && $users[$name] == $pw) {

        setcookie('loginname', $name, 0, '/');
        header('Location: login_aufg.php');
        die;
    } else {
        
        $msg = "Fehler bei der Anmeldung!";
    }
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

        <?php if (!$loginname) { ?>
            <p><?= $msg ?></p>
            <table>
                <tr>
                    <td>
                        <label for="name">Anmeldename </label><br />
                        <input type="text" name="name" id="name" required />
                    </td>
                    <td>
                        <label for="pw">Passwort </label><br />
                        <input type="password" name="pw" id="pw" required />
                    </td>
                </tr>
            </table>

            <input type="submit" value="Absenden" />
            <input type="reset" value="Zurücksetzen" />

        <?php } else {
            
            $msg = $loginname."  Sie haben sich erfolgreich eingeloggt";

            var_dump($_COOKIE);
            var_dump($loginname);
        ?>
            <p><?= $msg ?></p>
            <button><a href="logout_aufg.php">AUSLOGGEN</a></button>

        <?php } ?>

    </form>

    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>

</body>

</html>