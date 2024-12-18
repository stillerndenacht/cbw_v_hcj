<?php $seitentitel = 'First Formular mit Security' ?>
<?php
$starttime = microtime(true);
?>
<?php
$name = "";
$vn = "";
$textarea = "";
$meldung = "";
$check = false;

if (isset($_POST['name']) && isset($_POST['vn']) && isset($_POST['textarea'])) {

    $name = htmlspecialchars($_POST['name']);
    $vn = htmlspecialchars($_POST['vn']);
    $textarea = htmlentities($_POST['textarea']);

    $name = trim($name);
    $vn = trim($vn);
    $textarea = trim($textarea);


    if (mb_strlen($name) < 2 || mb_strlen($vn) < 2) {
        $meldung .= "Ihr Name oder Vorname scheint etwas kurz!<br>";
    } elseif ($name !== strip_tags($_POST['name'])) {
        $meldung .= "Ihr Name enthält ungültige Zeichen. Bitte korrigieren!";
    } elseif ($vn !== strip_tags($_POST['vn'])) {
        $meldung .= "Ihr Vorname enthält ungültige Zeichen. Bitte korrigieren!";
    } else {
        $check = true;
    }


    # die function wird erst unter dem Formular ausgegeben
    function serverout($name, $vn, $textarea, $meldung)
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
        echo $meldung . '<br>';
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

        #namespan {
            color: darkmagenta;
            font-size: larger;
            font-weight: bolder;
        }

        #meldung {
            color: red;
            font-size: larger;
            font-weight: bolder;
        }

        #textarea {
            border: 3px solid green;
            border-radius: 3px;
            min-height: 15px;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <?php
    if ($check) { ?>

        <article>
            <p>Wunderbar <span id="namespan"><?php echo $vn . " " . $name ?></span>, sie haben folgenden Text erfolgreich eingegeben:</p>
            <p id="textarea"><?php echo $textarea ?></p>
        </article>

    <?php } else { ?>

        <p id="meldung"><?php echo $meldung ?></p>

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
        </form>

    <?php } ?>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>

    <?php
    echo "<h2>Die Serverseite von first_formular_securitiy</h2>";
    # die serverout-function wird oben geschrieben, weil dort die Variablen vor dem html-formular gebraucht werden
    serverout($name, $vn, $textarea, $meldung);

    echo   '<br>--- Ausgabe des var_dump ---<br> ';
    var_dump($_POST);
    ?>
</body>

</html>