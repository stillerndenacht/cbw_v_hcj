<?php $seitentitel = 'Datenschutzhinweise'; ?>
<?php include 'includes/log_calls.inc.php'; ?>
<?php
$starttime = microtime(true);
?>
<?php
$datenschutz = @file_get_contents('uploads/txt/datenschuz.txt');
if ($datenschutz !== false) {
    # Html-Tags sollten dann direkt in der datenschutz.txt drin stehen..
    $datenschutz = strip_tags($datenschutz, '<b>'); # um den Text zu gestalten ohne gefährliche Tags zuzulassen, kann man ihn strippen (mit Ausnahme von..)
    $datenschutz = nl2br($datenschutz);
}else{$datenschutz = "<b>Die aktuelle Datenschutzerklärung ist aus mysteriösen Gründen nicht verfügbar!</b>";}
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
        <?= $datenschutz ?>
        <?php
        ?>
    </article>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>