<?php
include_once 'intit.inc.php';
$channellist = new ChannelList;
#var_dump($channellist);
$channellist->setChannel('https://www.zdf.de/rss/zdf/nachrichten');
$channellist->setChannel('https://www.chip.de/rss/chip_komplett.xml');
#var_dump($channellist);
?>
<!-- ------------------------------------------------- -->
<!DOCTYPE html>
<html lang="de">

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
  <p>Hier steht ein gewöhnlicher Absatztext.</p>
  <!-- <a
      href="https://www.zdf.de/phoenix/phoenix-vor-ort/phoenix-die-linke-reaktionen-auf-die-wahl-100.html"
      >link</a
    >
    <a id="a"
      href="https://www.zdf.de/rss/zdf/nachrichten"
      >link</a
    > -->
  <!-- <iframe id="iframe" src="https://www.zdf.de/rss/zdf/nachrichten"></iframe> -->
  <?php
  foreach ($channellist->channelArray as $channel):

  ?>
    <section>
      <a href="<?= $channel->siteurl ?>">
        <h2><?= $channel->title ?></h2>
      </a>
      <p><?= $channel->date ?></p>
      <p>Anzahl der Einträge: <?= $channel->channelcount ?></p>
      <!-- <p>Link: <a href="<?= $channel->siteurl ?>"><?= $channel->siteurl ?></a></p> -->
      <?php foreach ($channel->content as $item): ?>
        <article>
          <a href="<?= $item->url ?>" target="_blank">
            <h3><?= $item->title ?></h3></a>
            <img src="<?= $item->imagelink ?>" alt="">
          
          <p><?= $item->content ?></p>
          <p><?= $item->date ?></p>
          <p><?= $item->guid ?></p>
        </article>
      <?php endforeach; ?>
    </section>

  <?php endforeach; ?>

</body>

</html>