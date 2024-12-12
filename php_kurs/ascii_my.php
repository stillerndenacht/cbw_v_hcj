<?php $seitentitel = 'ASCII-Tabelle Veit' ?>
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
        <table>
            <tr>
                <th>Zeichen</th>
                <th>Dezimal</th>
                <th>Dual/Binär</th>
                <th>Oktal</th>
                <th>Hexadezimal</th>
            </tr>
            
            <?php
            $i = 32;
       while($i <= 126){
        $zeichen = chr($i);
        $dezimal = $i;
        $binaer = decbin($i);
        $oktal = decoct($i);
        $hex = dechex($i);
        ?><tr>
            <td><?=$zeichen ?></td>
            <td><?=$dezimal ?></td>
            <td><?=$binaer ?></td>
            <td><?=$oktal ?></td>
            <td><?=$hex ?></td>
        </tr><?php
        $i++;
       }
        ?>
            

        </table>
        
        

    </article>
</body>

</html>