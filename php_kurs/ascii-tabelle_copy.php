<?php $seitentitel = 'ASCII-Tabelle' ?>
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
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>

    <table>
        <tr>
            <th>ASCII-sign</th>
            <th>ASCII-decimal</th>
            <th>ASCII-dual</th>
            <th>ASCII-octal</th>
            <th>ASCII-hexadecimal</th>
        </tr>

        <?php
        $i = 32;
        while ($i < 127) {

        ?><tr>
                <td><?= chr($i) ?></td>
                <td><?= $i ?></td>
                <td><?= decbin($i) ?></td>
                <td><?= decoct($i) ?></td>
                <td><?= dechex($i) ?></td>
            </tr><?php
                    $i++;
                }
                    ?>
    </table>

</body>

</html>