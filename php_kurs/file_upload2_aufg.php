<?php $seitentitel = 'file upload2_aufg' ?>
<?php
$starttime = microtime(true);
?>
<?php $message = "Hallo melde dich ..."; ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo $seitentitel ?></title>
    <style>
        label,
        input,
        #yourfile {
            margin: 10px;
            padding: 10px;
            color: darkmagenta;

        }

        label {
            display: block;
            border: 2px solid yellow;
            min-width: 50%;
            background-color: lightgreen;
            text-align: center;
        }

        form {
            /* display: flex; */
            width: 70%;
            align-content: center;
            background-color: lightgoldenrodyellow;
        }

        p {
            background-color: greenyellow;
            border: 3px solid yellowgreen;
            color: black;
            font-weight: bolder;
            font-size: x-large;
            text-align: center;
        }
    </style>
</head>

<body>
    <!-- ------------------------------------------------- -->
    <?php
    $message = "Hallo melde dich ...";
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
        $error = $_FILES['yourfile1']['error'];
        $name = $_FILES['yourfile1']['name'];
        $type = $_FILES['yourfile1']['type'];
        $tmp_name = $_FILES['yourfile1']['tmp_name'];
        $size = $_FILES['yourfile1']['size'];
        $full_path = $_FILES['yourfile1']['full_path'];
        // wenn das input-tag mit name substitute angehakt ist -> true -> sonst false
        $substitute = isset($_POST['substitute']) ? true : false;

        # $zielcopy = 'uploads/'.$name.'_copy'; # übergebener Name mit Ergänzung, für das move
        $ziel = '';

        echo "<br>error für yourfile1 : " . $error . "<br>";
        var_dump($substitute);

        if ($error == UPLOAD_ERR_OK) {
            $message = "<br>Upload erfolgreich<br>";
            $ziel = match ($type) {
                'text/plain' => 'uploads/txt/' . $name,
                'image/jpeg' => 'uploads/images/' . $name,
                'application/pdf' => 'uploads/pdf/' . $name,
                '' => ''
            };


            if (file_exists($ziel)) {
                $message = "die Datei existiert bereits, an diesem Ort: " . $ziel . "<br>";

                if (filesize($ziel) == $size) {
                    $message = $message . "<br>Die vorhandene Datei war gleich groß.<br>";
                }
                if ($substitute) {
                    $message = $message . "<br>Sie wurde ersetzt!<br>";
                } else {
                    $message = $message . "<br>Sie wurde NICHT ersetzt!<br>";
                }
            }


            if ($substitute == true) {
                if (@move_uploaded_file($tmp_name, $ziel) == false) {
                    $message = $message. "<br>Fehler bei file-move<br>";
                } else {
                    $message = $message. "<br> Ihre Datei liegt hier : " . $ziel . "<br>";
                }
            }
        } elseif ($error == UPLOAD_ERR_NO_FILE) {
            $message = $message. "<br>Upload ohne Datei :<br>" . $error;
        } else {
            $message. "<br>Upload gescheitert :<br>" . $error;
        }
    }
    /*
    echo "Name der Datei : " . $name . "<br>";
    echo basename($name) . "<br>"; # falls der Name mit Pfad ausgegeben wird, stript basename auf dein reinen Dateinamen
    echo "mime-type : " . $type . "<br>";
    echo "full Path : " . $full_path . "<br>";
    echo "size      : " . $size . "<br>";
    echo "size in GB: " . $size / 1024 . "<br>";
    echo "tmp name  : " . $tmp_name . "<br>";
    echo "<br><br>";
    */

    /*// pathinfo gibt einen Array aus den verschiedenen Pfad-Bestandteilen auch file.extention
    var_dump(pathinfo($full_path));
    echo "<br><br>";
    var_dump(pathinfo($name));
    echo "<br><br>";
    var_dump(pathinfo($tmp_name));
    */


    sleep(1);
    ?>
    <h1><?php echo $seitentitel ?></h1>
    <!-- <form action="./first_formular_vorl.php" method="get"> -->

    <!-- ------- file-Upload geht nur per POST mit multipart/form-data ------------ -->

    <p><?= $message ?></p>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="file">your Upload : ... </label><br />

            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
            <!-- mit dem MAX_FILE_SIZE kann man die Datei-Größe in Byte mit übergeben - ist aber nicht sonderlich sicher -->

            <input type="file" name="yourfile1" id="yourfile" />
            <!-- <input type="file" name="yourfile2" id="yourfile" /> -->
            <label for="substitute">Datei, wenn vorhanden, ersetzen!<input type="checkbox" name="substitute" id="substitute" value="yes"></label>

        </div>
        <div id="submitdiv">
            <input type="submit" value="upload" class="b" />
            <input type="reset" value="Zurücksetzen" class="b" />
        </div>
    </form>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>

</body>

</html>