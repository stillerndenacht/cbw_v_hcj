<?php $seitentitel = 'Bestellung' ?>
<?php
$starttime = microtime(true);
?>
<?php
$products = [
    ["id" => 10, "name" => "SSD 1 TB", "einzelPreis" => 78.90, "mwstSatz" => 1],
    ["id" => 20, "name" => "Zeitschrift", "einzelPreis" => 4.99, "mwstSatz" => 2],
    ["id" => 30, "name" => "USB-Stick", "einzelPreis" => 19.99, "mwstSatz" => 1],
    ["id" => 40, "name" => "Patchkabel", "einzelPreis" => 3.99, "mwstSatz" => 1]
];
$bestellung = [
    ["idbest" => 10, "menge" => 4],
    ["idbest" => 20, "menge" => 3],
    ["idbest" => 30, "menge" => 1],
    ["idbest" => 40, "menge" => 12]
];
?>
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
            text-align: right;
        }
        .center,th {
            text-align: center;
            background-color:antiquewhite;
        }

        table {
            border: 1px solid black;
            border-collapse: collapse;
            width: 50%;
        }
        .bold {font-weight: bold;}
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <article>
        
        <table>
            <tr>
                <th>Menge</th>
                <th>Name</th>
                <th>Einzel-Preis</th>
                <th>Positon Preis</th>
            </tr>
            <?php
            $gespreis = 0;
            $mwst7ent = 0;
            $mwst19ent = 0;
            foreach ($bestellung as $pos) {

                foreach ($products as $product) {
                    if ($pos["idbest"] == $product["id"]) {
                        $name = $product["name"];
                        $epreis = $product["einzelPreis"];
                        $mwstSatz = $product["mwstSatz"];
                        if ($mwstSatz == 1) {
                            $mwst = 19;
                        } else {
                            $mwst = 7;
                        }
                    }
                }

                $menge = $pos["menge"];
                $name = $name;
                $epreis = $epreis;
                $mwst = $mwst;
                $pospreis = $menge * $epreis;

                if ($mwst == 19) {
                    $mwst19 = $pospreis - (100 * $pospreis / ($mwst + 100));
                    $mwst7 = 0;
                } else {
                    $mwst7 = $pospreis - (100 * $pospreis / ($mwst + 100));
                    $mwst19 = 0;
                }
                $mwst7r = round($mwst7, 2);
                $mwst19r = round($mwst19, 2);
                $gespreis += $pospreis;
                $mwst7ent += $mwst7r;
                $mwst19ent += $mwst19r;
            ?>

                <tr>
                    <td><?= $menge ?></td>
                    <td><?= $name ?></td>
                    <td><?= $epreis ?> € </td>
                    <td><?= $pospreis ?> € </td>
                </tr>

            <?php
            }
            $mwstges = $mwst7ent + $mwst19ent;
            ?>

            <tr>
                <td colspan="3" class="center">Gesamtbruttopreis</td>
                <td class = "bold"><?= $gespreis ?> €</td>

            </tr>
            <tr>
                <td colspan="3" class="center">Enthaltene MWST 7%</td>
                <td><?= $mwst7ent ?> €</td>

            </tr>
            <tr>
                <td colspan="3" class="center">Enthaltene MWST 19%</td>
                <td><?= $mwst19ent ?> €</td>

            </tr>
            <tr>
                <td colspan="3" class="center">Gesamte MWST</td>
                <td><?= $mwstges ?> €</td>

            </tr>
        </table>

    </article>
    <p style="background: yellow; text-align: right;">
        <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
    </p>
</body>

</html>