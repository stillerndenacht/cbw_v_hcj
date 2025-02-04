<?php $seitentitel = 'cookie consent' ?>
<?php
# ------ nur die Laufzeit-Messung
$starttime = microtime(true);
?>
<?php
var_dump($_COOKIE); # zum Test Ausgabe der Cookies
var_dump($_GET); # zum Test Ausgabe des GET-Parameters

#--- bei Erst-Aufruf wird das Overlay-Div (Eigenschaften siehe <style>) eingeblendet - im html über php-Einschübe, welche die Variablen ausgeben

$cookiestart = "<div id='overlay_on'>";
$cookieend = "</div>";
#-----
#--- Abfrage ob Cookie schon gesetzt

if (isset($_COOKIE['cookieyes'])) {

    # wenn Cookie da ist, wird das Overlay ausgeblendet

    $cookiestart = "<div id='overlay_off'>";
    $text = "doch nicht so wichtig!";
} else {
    # wenn nicht gesetzt wird dieser Text gezeigt

    $text = "Das ist ein wahnsinnig interessanter Text über irgendwas. Den solltest du dir auf keinen Fall entgehen lassen. Das musst du lesen. Glaub mir! Es wird dein Leben verändern!! BESTIMMT!!";

    # und auf den button-Click zum Setzen des Cookies gewartet

    if (isset($_GET['cookieyes'])) {
        setcookie('cookieyes', 'yes', time() + 60);

        header('Location:' . $_SERVER["PHP_SELF"]); # ruft das script neu auf $_SERVER... zeigt auf das Dokument selbst
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
        #overlay_off {
            display: none;
        }

        #overlay_on {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: rgba(208, 189, 0, 0.9);
            font-size: xx-large;
        }

        #text {
            font-size: 40px;
            font-family: 'Courier New', Courier, monospace;
            padding: 100px;
        }

        button {
            background-color: orange;
            color: blueviolet;
            margin: 20px;
            font-size: x-large;
            border-color: red;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>

    <!-- hier das via php-Variablen-echo eingefügte div -->
    <?php echo $cookiestart ?>

    <div id='overlay'>Cookies helfen bei der Bereitstellung dieser Inhalte. Durch die Nutzung dieser Webseite erklären Sie sich damit einverstanden, dass wir Cookies setzen.
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">
            <input type="hidden" name='cookieyes'>
            <button type='submit' name='cookieyes'>Gib mir Cookies!</button>
        </form>
    
    </div>
    <?php echo $cookieend ?>
    <!-- hier endet das overlay mit der eingefügten php-Variablen-Ausgabe -->

    <!-- hier Ausgabe des Textes aus der php-Variable -->
    <div id='text'><?= $text ?></div>
    
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>