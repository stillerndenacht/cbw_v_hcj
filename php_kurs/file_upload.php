<?php $seitentitel = 'file upload' ?>
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
            
            <input type="file" name="yourfile" id="yourfile" />
        </div>
        <input type="submit" value="upload" />
        <input type="reset" value="Zurücksetzen" />
    </form>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>




    <?php
    echo "<h2>Die Serverseite von file_upload.php</h2>";
   

    echo   '<br>--- Ausgabe ohne Sicherheit ---<br> ';
    #echo $_POST['yourfile'] . '<br>'; 
    

    echo   '<br>--- Ausgabe des var_dump auf Post ---<br> ';
    var_dump($_POST);
    echo '<br>--- Ausgabe des var_dump auf Files ---<br> ';
    var_dump($_FILES);

# Ausgabe des var_dump auf files
    // ["yourfile"]=>
    // array(6) {
    //   ["name"]=>
    //   string(24) "file_upload_testfile.txt"
    //   ["full_path"]=>
    //   string(24) "file_upload_testfile.txt"
    //   ["type"]=>
    //   string(10) "text/plain"
    //   ["tmp_name"]=>
    //   string(24) "C:\xampp\tmp\php6C37.tmp"
    //   ["error"]=>
    //   int(0)
    //   ["size"]=>
    //   int(48)
# die Datei landet maximal bis zum Ende des Scripts im temp-Ordner siehe tmp_name
# aber dann wird sie dort gelöscht - also muss man sie direkt weiterverarbeiten/schieben
# wenn wir das script kurz schlafen lassen, kann man sie dort sogar kurz sehen
# das tmp-Verzeichnis kann man im php.ini finden bzw. einstellen

    sleep(10);
    ?>
</body>

</html>