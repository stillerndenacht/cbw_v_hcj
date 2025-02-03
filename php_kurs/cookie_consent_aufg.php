<?php $seitentitel = 'cookie consent' ?>
<?php
echo time()."<br>";
echo microtime()."<br>"; # gibt time mit microsekunden vorangestellt
echo microtime(true)."<br>"; # gibt die microtime als float
$starttime = microtime(true);
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo $seitentitel ?></title>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <article>
        <?php echo "Hier php Code"; ?>
        <?php 
        ?>
    </article>
    <p style="background: yellow; text-align: right;">
    <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>