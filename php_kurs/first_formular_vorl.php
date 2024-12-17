<?php $seitentitel = 'First Formular' ?>
<?php

$starttime = microtime(true);
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

        #name, #vn {
            color: lightgray;
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
                    <input type="text" name="name" id="name" value="Maxine" required />
                </td>
                <td>
                    <label for="vn">Vorname </label><br />
                    <input type="text" name="vn" id="vn" value="Musterlich" required />
                </td>
            </tr>
        </table>
        <div>
            <label for="freitext">Freitext </label><br />
            <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="Absenden" />
        <input type="reset" value="Zurücksetzen" />
    </form>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>




<?php
echo "<h2>Die Serverseite von first_formular_vorl</h2>";
// echo $_GET['name'] . '<br>';
// echo $_GET['vn'] . '<br>';
// echo $_GET['textarea'] . '<br>';
// var_dump($_GET);
echo   '<br>';
echo $_POST['name'] . '<br>';
echo $_POST['vn'] . '<br>';
echo $_POST['textarea'] . '<br>';
var_dump($_POST);
?>
</body>
</html>