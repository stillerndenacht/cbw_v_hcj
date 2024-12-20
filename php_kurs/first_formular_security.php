<?php $seitentitel = 'First Formular mit Security' ?>
<?php

$starttime = microtime(true);
?>
<?php
$name = "";
$vn = "";
$textarea = "";

if (isset($_POST['name']) && isset($_POST['vn']) && isset($_POST['textarea'])) {

    $name = strip_tags($_POST['name']);
    $vn = htmlspecialchars($_POST['vn']);
    $textarea = htmlentities($_POST['textarea']);

    # die function wird erst unter dem Formular ausgegeben
    function serverout($name, $vn, $textarea)
    {
        echo "Neue Daten gepostet <br>";
        echo   '<br>--- Ausgabe mit Sicherheit ---<br> ';

        echo  $name . '<br>';
        echo $vn . '<br>';
        echo $textarea . '<br>';

        echo   '<br>--- Ausgabe ohne Sicherheit ---<br> ';
        echo $_POST['name'] . '<br>';
        echo $_POST['vn'] . '<br>';
        echo $_POST['textarea'] . '<br>';
    }
} else {

    # oder die function wird so ausgegeben
    function serverout()
    {
        echo "Da fehlt was. <br>";
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
        #vn {
            color: darkmagenta;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <!-- <form action="./first_formular_vorl.php" method="get"> -->
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">Name </label><br />
                    <input type="text" name="name" id="name" value="<?= $name ?>" required />
                </td>
                <td>
                    <label for="vn">Vorname </label><br />
                    <input type="text" name="vn" id="vn" value="<?= $vn ?>" required />
                </td>
            </tr>
        </table>
        <div>
            <label for="freitext">Freitext </label><br />
            <textarea name="textarea" id="textarea" cols="30" rows="10"><?= $textarea ?></textarea>
        </div>
        <input type="submit" value="Absenden" />
        <input type="reset" value="Zurücksetzen" />
    </form>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>




    <?php
    echo "<h2>Die Serverseite von first_formular_securitiy</h2>";
    serverout($name, $vn, $textarea);
    // echo $_GET['name'] . '<br>';
    // echo $_GET['vn'] . '<br>';
    // echo $_GET['textarea'] . '<br>';
    // var_dump($_GET);

    // $name = "";
    // $vn = "";
    // $textarea = "";

    // if (isset($_POST['name']) && isset($_POST['vn']) && isset($_POST['textarea'])) {
    //     echo "Neue Daten gepostet <br>";

    //     $name = strip_tags($_POST['name']);
    //     $vn = htmlspecialchars($_POST['vn']);
    //     $textarea = htmlentities($_POST['textarea']);

    //     echo   '<br>--- Ausgabe mit Sicherheit ---<br> ';

    //     echo  $name . '<br>';
    //     echo $vn . '<br>';
    //     echo $textarea . '<br>';

    //     // echo   '<br>--- Ausgabe mit Sicherheit ---<br> ';
    //     // # wenn ich in die Textfelder sowas : <div style="color:red;">Divi</div> eingebe wird es normalerweise ausgeführt (siehe var_dump)
    //     // echo strip_tags($_POST['name']) . '<br>'; # löscht alle tags einfach weg
    //     // echo htmlspecialchars($_POST['vn'] ). '<br>'; # speichert zwar die tags aber verhindert die Ausführung
    //     // echo htmlentities($_POST['textarea']) . '<br>'; # speichert zwar die tags aber verhindert die Ausführung, ist aber nicht immun gegen Hex oder Oktal-Zahl

    //     echo   '<br>--- Ausgabe ohne Sicherheit ---<br> ';
    //     echo $_POST['name'] . '<br>';
    //     echo $_POST['vn'] . '<br>';
    //     echo $_POST['textarea'] . '<br>';
    // } else {
    //     echo "Da fehlt was. <br>";
    // }


    echo   '<br>--- Ausgabe des var_dump ---<br> ';
    var_dump($_POST);
    ?>
</body>

</html>