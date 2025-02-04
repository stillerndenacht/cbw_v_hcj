<?php $seitentitel = 'Login Formular (mit Security)' ?>
<?php
$starttime = microtime(true);
?>
<?php
$name = "";
$pw = "";
$msg = "Bitte melden Sie sich an!";
var_dump($_COOKIE);
function serverout($name, $pw)
    {
        
        $users = ['usera' => 'password', 'userb' => 'pass!word', 'userc' => 'pässwörd'];

        if (isset($users[$name]) && $users[$name] == $pw) {
echo '1111';
            $msg = "juhu $name ist angemeldet";
            setcookie('login', 'in', time(), '/');
            #header('Location: login_in_aufg.php');
        
            die;
        } else {

            $msg = "Fehler bei der Anmeldung!";
        }
       
        return $msg;
    }

#var_dump($_POST);

if (isset($_POST['name']) && isset($_POST['pw'])) {

    $name = htmlspecialchars($_POST['name']);
    $pw = htmlspecialchars($_POST['pw']);   
    
}


echo "<h2>Die Serverseite von login_aufg</h2>";
serverout($name, $pw);


echo   '<br>--- Ausgabe des var_dump ---<br> ';
var_dump($_POST);
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
    <!-- <form action="./first_formular_vorl.php" method="get"> -->
    <p><?= $msg ?></p>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
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
    </form>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>





</body>

</html>