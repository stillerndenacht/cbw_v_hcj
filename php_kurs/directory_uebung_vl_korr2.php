<?php $seitentitel = 'Directory Übung von mir' ?>

<?php
$starttime = microtime(true);
?>

<?php
$path = './';
$arraydir = [];
$arrayfile = [];
// $arraymisc = [];
// $grByte = "-";
// $grKib = "-";
// $grMib = "-";
if (is_dir($path)) {
    $dir = dir($path);


    while (($read = $dir->read()) !== false) {
        if (($read !== '.') && ($read !== '..')) {
            // echo $read . "<br>";
            if (is_dir($path.$read)) {
                $arraydir[] = $read;
            } elseif (is_file($path.$read)) {
                $arrayfile[] = $read;
            }
            // } else {
            //     $arraymisc[] = $read;
            // }
        }
    }
    // echo "<br>----------arraydir<br>";
    // var_dump($arraydir);
    // echo "<br>----------arrayfile<br>";
    // var_dump($arrayfile);
    // echo "<br>----------arraymisc<br>";
    // var_dump($arraymisc);
    $dir->close();
}

$elemente = ["Directorys" => $arraydir, "Files" => $arrayfile];
// $elemente = ["Directorys" => $arraydir, "Files" => $arrayfile, "Misc" => $arraymisc];
// $anzahldir = count($arraydir);
// $anzahlfile = count($arrayfile);
// $anzahlmisc = count($arraymisc);
#var_dump($elemente);
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
            text-align: center;
            padding: 5px 5px;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <?php foreach ($elemente as $elementkey => $elementarr):
        // echo $elementkey;
        // var_dump($elementarr);
        $anzahl = count($elementarr);
    ?>
        <table>
            <thead>
                <tr>
                    <th colspan="4"><?= "Anzahl der $elementkey :  $anzahl" ?></th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Größe in Byte</th>
                    <th>Größe in KiB</th>
                    <th>Größe in MiB</th>
                </tr>
            </thead>
            <tbody>

                <?php if ($anzahl > 0): ?>
                    <?php foreach ($elementarr as $element):
                        // echo $element . "<br>";
                        $groesse = filesize($path.$element);
                        $grByte = "-";
                        $grKib = "-";
                        $grMib = "-";
                        if ($groesse < 1024) {
                            $grByte = $groesse . " Byte";
                        } elseif (($groesse >= 1024) && ($groesse < 1024 * 1024)) {
                            $grKib = round($groesse/1024,2 ). " KiB";
                        } else {
                            $grMib = round($groesse/1024/1024,2) . " MiB";
                        }
                    ?>

                        <tr>
                            <td><?= $element ?></td>
                            <td><?= $grByte ?></td>
                            <td><?= $grKib ?></td>
                            <td><?= $grMib ?></td>

                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
        </table>
        <p style="background: yellow; text-align: right;">
            <?php echo number_format(microtime(true) - $starttime, 6, ','); ?>
        </p>
</body>

</html>