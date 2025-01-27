<?php $seitentitel = 'RSS-Call' ?>

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
        if (($feed = simplexml_load_file('https://www.zdf.de/rss/zdf/nachrichten')) != false) {
            echo "juhu" . "<hr>";
            #var_dump($feed);
            $rsstitle = $feed->channel->title;
            $rssdate = $feed->channel->pubDate;
            $rssitemcount = $feed->channel->item->count();
            #echo $rsstitle;
            #echo $rssdate;
            #var_dump($feed->channel->item->title);
            ?>

            <h2>Feed-Ursprung : <?= $rsstitle?></h2>
            <p>Gesamtzahl : <?= $rssitemcount ?></p>
            <p><?= $rssdate ?></p>
            
            <?php

            foreach ($feed->channel->item as $item) :
                $itemtitle = $item->title;
                #echo $itemtitle;
                $itemdate = $item->pubDate;
                $itemtext = $item->description;
                $itemlink = $item->link;
                if (($item->enclosure)) {
                    foreach ($item->enclosure->attributes() as $attrkey => $attrvalue) {
                        if (($attrkey == 'type') && ($attrvalue == 'image/jpeg')) {
                            $itemimagelink = $item->enclosure->attributes()->url;
                            #var_dump($itemimagelink);
                            #echo "<img src=". $itemimagelink." >" ;

                        }
                    }

                    #echo "<br>es gibt ein bild";
                }
        ?>
                <article>
                    <h3><?= $itemtitle ?></h3>
                    <p><?= $itemdate ?></p>
                    <img src="<?= $itemimagelink ?>" alt="">

                    <p><?= $itemtext ?></p>
                </article>
        <?php endforeach;
        } else {
            echo " .... NOPE ...." . "<hr>";
        }
        ?>
    </section>

</body>

</html>