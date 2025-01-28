<?php $seitentitel = 'RSS-Call from RSSDB' ?>
<?php
#----------------------------------------------------
# Initialisieren der Verbindung zum Server
# kann auch als Include ausgelagert werden

$host = 'localhost';
$dbname = '';
$port = 3306;
$user = 'root';
$pw = '';

$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_PERSISTENT         => true
);

try {
    $dbrss = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pw, $options);
    # var_dump($dbrss); # Ausgabe: object(PDO)#1 (0) { }
} catch (PDOException $e) {
    echo $e->getMessage();
    die("<br>Diese DB : $dbname existiert nicht");
}

# jetzt gibt es $dbrss als Verbindung auf die man mit SQL-Befehlen arbeiten kann

#---------------------------------------------------
$dbrss->exec('USE RSSDB');
$sql = 'SELECT * FROM feeds ORDER BY pubdate DESC';
$statement = $dbrss->query($sql);

$feed = $statement->fetchAll();
# var_dump($feed); # nur zum Test
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
    <section>
        <?php
        if ($feed != false) {
            echo "juhu" . "<hr>";
            #var_dump($feed);
            $channeltitle = $feed[0]['channeltitle'];
            $timestamp = $feed[0]['channeldate'];
            $channeldate = (new DateTime('@' . $timestamp))->format("d.M.Y H:i:s");
            $rssitemcount = count($feed);
            #echo $rsstitle;
            #echo $rssdate;
            #var_dump($feed->channel->item->title);
        ?>

            <h2>Feed-Ursprung : <?= $channeltitle ?></h2>
            <p>Gesamtzahl : <?= $rssitemcount ?></p>
            <p><?= $channeldate ?></p>
            <hr>

            <?php

            foreach ($feed as $item) :
                $itemtitle = $item['title'];
                #echo $itemtitle;
                $itemtimestamp = $item['pubdate'];
                $itemdate = (new DateTime('@' . $itemtimestamp))->format("d.M.Y H:i:s");
                $itemtext = $item['description'];
                $itemlink = $item['link'];
                $itemimagelink = $item['imagelink'];
            ?>
                <article>
                    <h3><?= $itemtitle ?></h3>
                    <p><?= $itemdate ?></p>
                    <img src="<?= $itemimagelink ?>" alt="">
                    <p><?= $itemtext ?></p>
                    <hr>
                </article>
        <?php endforeach;
        } else {
            echo " .... NOPE ...." . "<hr>";
        }
        ?>
    </section>

</body>

</html>