<?php $seitentitel = 'ein-mal-eins' ?>
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
        p {
            margin: 3px;
        }

        h3 {
            background-color: lightgreen;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <article>

        <?php
        $zahl1 = 0;

        for ($zahl1; $zahl1 <= 10; $zahl1++) { ?>
            <h3>das ein mal eins für <?= $zahl1 ?></h3>
            <?php

            for ($zahl2 = 0; $zahl2 <= 10; $zahl2++) { ?>
                <p>
                    <?= $zahl1 . " * " . $zahl2 . " = " . $zahl1 * $zahl2 ?>
                </p>
        <?php
            }
        }
        ?>
    </article>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>