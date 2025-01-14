<?php $seitentitel = 'file upload multi' ?>
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

            <input type="file" name="yourfile1" id="yourfile" />
            <input type="file" name="yourfile2" id="yourfile" />
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
        $error1 = $_FILES['yourfile1']['error'];
        echo "<br>error für yourfile1 : " . $error1;
        $error2 = $_FILES['yourfile2']['error'];
        echo "<br>error für yourfile2 : " . $error2;
        if ($error1 == 0) {
            echo "Upload erfolgreich";
        } else {
            echo "Upload gescheitert";
        }
    }
    # upload_max_filesize kann man in php.ini einstellen (Standard 40 MB)  
    # POST_max_size kann man in der php.ini anpassen (Standard 40 MB)
    # max_file_uloads ist Anzahl der möglichen Dateien pro Upload in php.ini (Standard 20)
    # post_max_size zählt also alle Dateien pro upload zusammen..
    # file_uploads=Off würde in der php.ini den upload generell verhindern
    sleep(1);
    ?>
</body>

</html>