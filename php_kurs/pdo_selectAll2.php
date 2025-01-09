<!-- damit das hier läuft muss pdo_dbthings_freunde.php über http://localhost/hcj_cbw/php_kurs/ aufgerufen werden. 
 Denn sonst gibt es die Datenbank nicht-->

<?php $seitentitel = 'komische Freunde:innen2' ?>
<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');
$sql = 'SELECT id, vorname, nachname, zeit FROM PDOFreunde ORDER BY id DESC';
$statement = $db->query($sql);

$freunde = $statement->fetchAll();
# var_dump($freunde); # nur zum Test

$anzahl = count($freunde);

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
    
    <p><?= "Anzahl der Datensätze :  $anzahl" ?></p>

    <Table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Vorname</th>
                <th>Nachname</th>
                <th>Zeit</th>
            </tr>
        </thead>
        <tbody>

            <?php if ($anzahl > 0): ?>
                <?php foreach ($freunde as $freund): ?>

                    <tr>

                        <td><a href="pdo_selectOne2.php?id=<?= $freund['id'] ?>"><?= $freund['id'] ?></a></td>
                        <!-- die id des jeweiligen Datensatzes wird einfach im link als php-Schnipsel mit übergeben - wie simpel-->

                        <td><?= htmlspecialchars($freund['vorname']) ?></td>
                        <td><?= htmlspecialchars($freund['nachname']) ?></td>
                        <td><?= date('Y m d H:i:s', $freund['zeit']) ?></td>

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
        </tbody>
    </Table>
</body>

</html>