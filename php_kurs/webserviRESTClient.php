<?php

$call = "hier kommt die Antwort";

function click($clicked)
{
    #var_dump($clicked);

    $webservicecall = file_get_contents("http://localhost/hcj_cbw/php_kurs/webserviRESTServer.php?serv=$clicked");

    global $call;
    $call = $webservicecall;
}

// für diese Variante müssen die namen der buttons abgefragt
// if (isset($_GET['zufall'])) {

//     click('zufall');
// } elseif (isset($_GET['zitat'])) {

//     click('zitat');
// } elseif (isset($_GET['lotto'])) {

//     click('lotto');
// } else {
//     click('reset');
// }

if (isset($_GET)) {
    var_dump($_GET['button']);
    switch ($_GET['button']) {
        case 'zufall':
            click('zufall');
            break;
        case 'zitat':
            click('zitat');
            break;
        case 'lotto':
            click('lotto');
            break;
        case 'reset':
            click('reset');
            break;
        default:
            click('reset');
            break;
    }
} else {
    click('reset');
}


?>
<?php $seitentitel = 'Webservice REST' ?>
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
        button {
            font-size: 20px;
            margin: 5px;
            color: darkmagenta;
        }

        p {
            font-size: 25px;
            font-weight: bolder;
            font-family: 'Courier New', Courier, monospace;
            background-color: lightgreen;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>

    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">

        <button type="submit" name="button" value="zufall">Zufall</button>
        <button type="submit" name="button" value="zitat">Zitat</button>
        <button type="submit" name="button" value="lotto">Lotto</button>
        <button type="submit" name="button" value="reset">Reset</button>

    </form>
    <p><?php echo $call; ?></p>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>