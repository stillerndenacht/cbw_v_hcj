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
# Erstellen der DB

# Vorbereiten des CREATE-Statement
$sql = "
CREATE DATABASE IF NOT EXISTS RSSDB;
USE RSSDB;
";

echo $sql . "<br>"; # nur zum Test der Ausgabe des Statement

# Ausführen des Statement
$dbrss->exec($sql);
# bei Erfolg findet man die RSSDB-Datenbank jetzt unter http://localhost/phpmyadmin/ (bzw. über den Admin-Button zu mySQL in xampp)

#---------------------------------------------------
# Erstellen der Struktur der RSSDB

# Vorbereiten des Statements

$sql2 = "
CREATE TABLE IF NOT EXISTS feeds(
guid VARCHAR(100),
PRIMARY KEY(guid),
title VARCHAR(100),
description TEXT,
link VARCHAR(100),
imagelink VARCHAR(255),
pubdate INTEGER,
channeltitle VARCHAR(100),
channelroot VARCHAR(100),
channellink VARCHAR(100),
channeldate INTEGER
);
USE RSSDB;
";
# Ausführen des Statement
echo $sql2 . "<br>"; # nur zum Test
$dbrss->exec($sql2);
# bei Erfolg findet man die Tabelle in der RSSDB
#----------------------------------------------------
# Abrufen des Rss-Feed-Links und Zerlegen und verteilen

#$feedlink = 'https://www.zdf.de/rss/zdf/nachrichten';
$feedlink = 'https://www.deutschlandfunk.de/nachrichten-100.rss';

if (($feed = simplexml_load_file($feedlink)) != false) {
    echo "juhu" . "<hr>";
    #var_dump($feed);
    #var_dump(parse_url($feedlink));

    $channeltitle = $feed->channel->title;
    $channeldate = (new DateTime($feed->channel->pubDate))->format('U');
    $channelroot = parse_url($feedlink)['host'];
    $channelitemcount = $feed->channel->item->count();
    $channellink = $feedlink;

    echo $channeltitle;
    echo $channeldate;
    echo $channelroot;
    #var_dump($feed->channel->item->title);

    foreach ($feed->channel->item as $item) :
        $itemguid = $item->guid;
        $itemtitle = addslashes($item->title);
        #echo $itemtitle;
        $itemdate = (new DateTime($item->pubDate))->format('U');
        $itemdescription = addslashes($item->description);
        $itemlink = $item->link;
        $itemimagelink = '';



        if (($item->enclosure)) {
            foreach ($item->enclosure->attributes() as $attrkey => $attrvalue) {
                if (($attrkey == 'type') && ($attrvalue == 'image/jpeg')) {
                    $itemimagelink = $item->enclosure->attributes()->url;
                }
            }
        }

        $sql3 = "
        INSERT INTO feeds
            (guid, title, description, link, imagelink, pubdate,
            channeltitle, channelroot, channellink, channeldate) 

            VALUES ('$itemguid', '$itemtitle', '$itemdescription', '$itemlink', '$itemimagelink', $itemdate,
            '$channeltitle', '$channelroot', '$channellink', $channeldate)

            ON DUPLICATE KEY UPDATE
            title = '$itemtitle',
            description = '$itemdescription',
            link = '$itemlink',
            imagelink = '$itemimagelink',
            pubdate = $itemdate,
            channellink = '$channellink',
            channeldate = $channeldate;
                ";

        #echo $sql3 . "<br>"; # nur zum Test
        $dbrss->exec($sql3);

    endforeach;
}
