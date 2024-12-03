<?php $seitentitel = '' ?>
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
        <?php echo "Hier php Code";?>
        <?php phpinfo(); # gibt eine Infoseite zur PHP-Installation aus -- sehr informativ?>
    </article>
</body>

</html>