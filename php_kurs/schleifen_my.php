<?php $seitentitel = 'Schleifen' ?>
<?php
// echo time()."<br>";
// echo microtime()."<br>"; # gibt time mit microsekunden vorangestellt
// echo microtime(true)."<br>"; # gibt die microtime als float
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
        <?php echo "for-Schleife<br>"; ?>
        <?php
        # Form wie immer : 
        # for (Startanweisung; Bedingung; Durchlaufanweisung){Anweisung}
        # max_execution_time=120 in der php.ini - falls die Schleife zu lange läuft wird abgebrochen

        for ($i = 0; $i < 10; $i++) {
            echo " i = $i<br>";
        }
        echo " oder mit endfor;<br>";
        for ($i = 0; $i < 10; $i++) :
            echo " i = $i<br>";
        endfor;
        # funktioniert auch mit foreach / endforeach

        echo "Schleife die die Zahlen 1 - 1000 addiert <br>";
        $erg = 0;
        for ($i = 0; $i <= 1000; $i++) {
            $erg += $i;
            #echo " ergebnis = $erg<br>";
        }
        echo " ergebnis = $erg<br>";

        # eine seltsame Form einer for-Schleife, die aber nicht empfehlenswert ist
        echo "Seltsame for-Schleife<br>";
        $erg = 0;
        $i = 0;
        for (;;) {
            $erg += $i;
            $i++;
            if ($i > 100) break;
        }
        echo " ergebnis = $erg<br>";

        echo "Schleife mit continue<br>";
        for ($i = 0; $i < 10; $i++) {
            if ($i % 3 == 0) continue;
            echo " i = $i<br>";
        }

        echo "Schleife mit break<br>";
        for ($i = 1; $i < 10; $i++) {
            if ($i % 5 == 0) break;
            echo " i = $i<br>";
        }

        echo "While-Schleife<br>";
        $i = 1;
        while ($i <= 5) {
            echo "i = $i<br>";
            $i++;
        }

        echo "Do_While-Schleife<br>";
        $i = 1;
        do {
            echo "i = $i<br>";
            $i++;
        } while ($i <= 5);


        ?>
    </article>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>