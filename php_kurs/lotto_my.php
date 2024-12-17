<?php $seitentitel = 'Lotto' ?>
<?php
// echo time()."<br>";
// echo microtime()."<br>"; # gibt time mit microsekunden vorangestellt
// echo microtime(true)."<br>"; # gibt die microtime als float
$starttime = microtime(true);
?>
<?php
function lotto()
{
    $lottoarr = [];
    $i = 0;
    do {
        $rand = rand(1, 49);
        if (!in_array($rand, $lottoarr)) {
            array_push($lottoarr, $rand);
            $i++;
        }
    } while ($i < 6);
    return $lottoarr;
}
echo "<br>";
$lottoarr1 = lotto();
print_r($lottoarr1);
echo "<br>";
$j = 1;
$juhu = false;
do {
    $lottoarr2 = lotto();
    print_r($lottoarr2);
    if ($lottoarr1 == $lottoarr2) {
        echo "<br>Juhu sie sind gleich<br>";
        $juhu =  true;
    }
    echo "Versuch Nr.: $j<br>";
    $j++;
} while ($j < 1000);



print_r(lotto());
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
        <?php $dauer = number_format(microtime(true) - $starttime, 6, ',');
        echo $dauer;
        echo 1000 /(float)$dauer;
        ?>
    </p>
</body>

</html>