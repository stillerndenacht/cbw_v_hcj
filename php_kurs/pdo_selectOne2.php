<!-- damit das hier läuft muss pdo_dbthings_freunde.php über http://localhost/hcj_cbw/php_kurs/ aufgerufen werden. 
 Denn sonst gibt es die Datenbank nicht-->
 <!-- dazu gehören pdo_selectAll2.php pdo_delete2.php ...-->

<?php $seitentitel = 'Freund:in2' ?>
<?php
include 'includes/PDOConnect_freunde.inc.php';
$db->exec('USE FAGPHP');

$id = $_GET['id'];
# echo $id;
$sql = 'SELECT id, vorname, nachname, info, zeit FROM PDOFreunde WHERE id=' . $id;
$statement = $db->query($sql);
$freund = $statement->fetch();
#var_dump($freund); # nur zum Test

$vorname = $freund['vorname'];
$nachname = $freund['nachname'];
$info = $freund['info'];
// $zeit = $freund['zeit'];
$zeit = date("d.M.Y H:i:s", $freund['zeit']);

$anzahl = count($freund);
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Beschreibung der Seite ca. 150 Zeichen">
    <title><?php echo $seitentitel ?></title>
    <style>
        * {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        h2 {
            background-color: lightgreen;
            max-width: 50%;
        }

        button {
            padding: 5px;
            font-size: large;
            background-color: lightseagreen;
        }

        button>a {
            text-decoration: none;
            color: whitesmoke;
        }

        #delete {
            background-color: red;

        }

        article {
            background-color: lightyellow;
            max-width: 50%;
            min-height: 100px;
        }
    </style>
</head>

<body>
    <h1><?php echo $seitentitel ?></h1>
    <p><?= $zeit ?></p>
    <h3>Name des/der Freund:in : </h3>
    <h2><?php echo $vorname . ' ' . $nachname ?></h2><!-- bei der langen Form des php-Tags muss das echo mit rein-->

    <article><?= $info ?></article><!-- die kurze Form des php-Tags echot automatisch-->
    <button id="delete"><a href="pdo_delete2.php?id=<?= $id ?>">Freund löschen</a></button>
    <button><a href="pdo_update.php?id=<?= $id ?>">Freund aktualisieren</a></button>

</body>