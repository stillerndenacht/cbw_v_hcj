<?php $seitentitel = 'Rabatt oder Nicht' ?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo $seitentitel ?></title>
    <style>
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 50%;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <article>
        <?php
        $grundpreis = 7000;
        $rabatt = 0;
        $rabatt3 = 0.97;
        $rabatt5 = 0.95;
        $rabatt8 = 0.92;
        $verkaufspreis = 0.;
        $mwst = 0.19;
        $low = 0;
        ?>
        <?php
        if ($grundpreis < 0) {
            echo "Das geht nicht der Preis muss mindestens 0 € sein!!";
        } else {
            if ($grundpreis >= 1000 && $grundpreis < 3000) {
                $verkaufspreis = $grundpreis * $rabatt3;
                $low = 1;
            } elseif ($grundpreis >= 3000 && $grundpreis < 5000) {
                $verkaufspreis = $grundpreis * $rabatt5;
                $low = 1;
            } elseif ($grundpreis >= 5000) {
                $verkaufspreis = $grundpreis * $rabatt8;
                $low = 1;
            } else {
                $verkaufspreis = $grundpreis;
            }
            if ($low) {
                $rabatt = $grundpreis - $verkaufspreis;
            }
            $mwstanteil = $verkaufspreis * $mwst;
            $netto = $verkaufspreis - $mwstanteil;


            echo "<table>
            <tr>
                <th>Grundpreis</th>
                <td>" . $grundpreis . " €</td>
            </tr>
            <tr>
                <th>Rabatt</th>
                <td>" . $rabatt . " €</td>
            </tr>
            <tr>
                <th>Verkaufspreis</th>
                <td>" . $verkaufspreis . " €</td>
            </tr>
            <tr>
                <th>Netto</th>
                <td>" . $netto . " €</td>
            </tr>
            <tr>
                <th>Enthaltene MwSt.</th>
                <td>" . $mwstanteil . " €</td>
            </tr>
        </table>";
        }
        ?>


    </article>
</body>

</html>