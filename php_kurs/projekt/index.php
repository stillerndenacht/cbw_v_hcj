<!DOCTYPE html>
<html lang="de">
<?php
include_once 'intit.inc.php';
$channellist = new ChannelList("dbtestprojekt");
#$channellist->deleteDB('dbprojekt');

#$channellist->setChannel('https://www.zdf.de/rss/zdf/nachrichten');
#$channellist->setChannel('https://www.chip.de/rss/chip_komplett.xml');
#$channellist->setChannel('https://www.tagesschau.de/infoservices/alle-meldungen-100~rss2.xml');
#$channellist->setChannel('https://www.tagesschau.de/ausland/ozeanien/index~rss2.xml');
#$channellist->setChannel('https://www.heise.de/rss/heise.rdf');



?>
<!-- ------------------------------------------------- -->

<head>
  <meta name="keywords" content="personal startpage" />
  <meta name="description" content="Hier ist eine Beschreibung meiner
    Webseite">
  <meta name="author" content="Mein Name" />
  <meta charset="UTF-8" />
  <base href="" target="_blank" />
  <link rel="stylesheet" type="text/css" href="styles.css" />
  <title>personal startpage</title>

  <link
    rel="icon"
    type="image/svg+xml"
    href="img/Kliponius_Cartoon_rocket.svg" />
</head>

<body>
  <h1>personal startpage</h1>
  <div id="gridarea">
    <?php
    foreach ($channellist->channelArray as $channel):
    ?>
      <section>
        <a href="<?= $channel['siteurl'] ?>">
          <h2><?= $channel['title'] ?></h2>
        </a>
        <div class=headline>
          <p><?= (new DateTime("@".$channel['date']))->format("d.m.Y H:i:s") ?></p>
          <p>Anzahl der Einträge: <?= count($channellist->dbchannelArrayItems[$channel['title']]) ?></p>
        </div>
        
        <div id="articlearea">
          <?php foreach ($channellist->dbchannelArrayItems[$channel['title']] as $item): ?>
            <article>
              <div class=headline><a href="<?= $item['url'] ?>" target="_blank">
                  <h3><?= $item['title'] ?></h3>
                </a>
                <p><?= (new DateTime("@".$item['date']))->format("d.m.Y H:i:s") ?></p>
              </div>
              <div class="itemcontent">
               

                <p class=text><img src="<?= $item['imagelink'] ?>" alt=""><?= $item['content'] ?></p>
              </div>
              <!-- <p><?= $item['guid'] ?></p> -->
            </article>
          <?php endforeach; ?>
        </div>
      </section>

    <?php endforeach; ?>
  </div>
</body>

</html>