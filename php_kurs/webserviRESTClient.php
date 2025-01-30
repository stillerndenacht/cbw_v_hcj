<?php
function click($clicked){
    var_dump($clicked);

#$webservicecall = file_get_contents('http://localhost/hcj_cbw/php_kurs/webserviRESTServer.php?serv=zitat');

#$webservicecall = file_get_contents('http://localhost/hcj_cbw/php_kurs/webserviRESTServer.php?serv=zufall');

$webservicecall = file_get_contents("http://localhost/hcj_cbw/php_kurs/webserviRESTServer.php?serv=$clicked");

 return $webservicecall;
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
    
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="GET">
        
        <button type="button" value="Zitat" onclick="<?php echo "click('zitat')";?>" serv="zitat">Zitat</button>
        <input type="button" value="Zufall" serv="zufall" />
    </form>
    <!-- <p><?= $webservicecall?></p> -->
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>
</html>