<?php $seitentitel = 'Kreisradius' ?>
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
        <?php $radius = 10;
        $umfang = 2 * pi() * $radius;
        $flaeche = pi() * $radius * $radius;
        ?>
        <table>
            <thead>
                <tr>
                    <th>Radius</th>
                    <th>Umfang</th>
                    <th>Fläche</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $radius ?> cm</td>
                    <td><?php echo $umfang ?> cm</td>
                    <td><?php echo $flaeche ?> cm&#178</td>
                </tr>
            </tbody>
        </table>


    </article>
</body>

</html>