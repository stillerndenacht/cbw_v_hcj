<?php $seitentitel = 'file upload2' ?>
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

        # {
            color: darkmagenta;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <!-- <form action="./first_formular_vorl.php" method="get"> -->

    <!-- ------- file-Upload geht nur per POST mit multipart/form-data ------------ -->

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="file">your Upload : ... </label><br />

            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" /> 
            <!-- mit dem MAX_FILE_SIZE kann man die Datei-Größe in Byte mit übergeben - ist aber nicht sonderlich sicher -->

            <input type="file" name="yourfile1" id="yourfile1" />
            <!-- <input type="file" name="yourfile2" id="yourfile" /> -->
        </div>
        <input type="submit" value="upload" />
        <input type="reset" value="Zurücksetzen" />
    </form>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
    <!-- ------------------------------------------------- -->
    <?php
    echo "<h2>Die Serverseite von file_upload.php</h2>";

    echo   '<br>--- Ausgabe ohne Sicherheit ---<br> ';
    #echo $_POST['yourfile'] . '<br>'; 

    echo   '<br>--- Ausgabe des var_dump auf Post ---<br> ';
    var_dump($_POST);
    echo '<br>--- Ausgabe des var_dump auf Files ---<br> ';
    var_dump($_FILES);

    if ($_FILES) {
        # wenn $_FILES == true
        # für die Übersichtlichkeit - Übergeben des $_FILES-Array-Inhalts in Variablen
        $error1 = $_FILES['yourfile1']['error'];
        $name1 = $_FILES['yourfile1']['name'];
        $type1 = $_FILES['yourfile1']['type'];
        $tmp_name1 = $_FILES['yourfile1']['tmp_name'];
        $size1 = $_FILES['yourfile1']['size'];
        $full_path1 = $_FILES['yourfile1']['full_path'];

        # $ziel = 'uploads/up_'.$name1; # übergebener Name mit Ergänzung, für das move
        $ziel = '/uploads/' . $name1;

        echo "<br>error für yourfile1 : " . $error1 . "<br>";

        if ($error1 == 0) {
            echo "<br>Upload erfolgreich<br>";
            
            # move_uploaded_file($tmp_name1,$ziel); # die hochgeladene Datei abspeichern unter dem Name der mitgeliefert wurde, siehe $ziel oben
            # Fehlerbehandlung das @ vor move unterdrückt die Fehler-Warning von php, weil das "== false" auf den Rückgabewert der function schon eine Meldung produziert
            # move_uploaded_file beinhaltet die funktion is_uploaded_file by default (um zu verhindern, dass durch den konstruierten dateinamen versehentlich oder böswillig andere Dateien aus dem tmp verschoben werden)
            if (@move_uploaded_file($tmp_name1, $ziel) == false) {
                echo "<br>Fehler bei file-move<br>";
            }
        } elseif ($error1 == 4) {
            echo "<br>Upload ohne Datei :<br>" . $error1;
        } else {
            echo "<br>Upload gescheitert :<br>" . $error1;
        }


        echo UPLOAD_ERR_OK; # ist eine Konstante, Wert = 0 und kann auch in - if($error == UPLOAD_ERR_OK){} benutzt werden
        echo UPLOAD_ERR_NO_FILE; # Konstante für leeren Upload Wert = 4
    }
    echo "Name der Datei : " . $name1 . "<br>";
    echo basename($name1) . "<br>"; # falls der Name mit Pfad ausgegeben wird, stript basename auf dein reinen Dateinamen
    echo "mime-type : " . $type1 . "<br>";
    echo "full Path : " . $full_path1 . "<br>";
    echo "size      : " . $size1 . "<br>";
    echo "size in GB: " . $size1 / 1024 . "<br>";
    echo "tmp name  : " . $tmp_name1 . "<br>";

    sleep(1);
    ?>
</body>

</html>