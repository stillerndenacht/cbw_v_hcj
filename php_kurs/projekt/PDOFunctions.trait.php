<?php
trait PDOFunctions
{
    # übergeben wir hier die $channellist bzw. wo übergeben wir die??
    public function createDB($dbproj, $dbname)
    {
        $sql = "             
            CREATE DATABASE IF NOT EXISTS $dbname; 
            USE $dbname; 
            ";
        echo $sql . "<br>";

        $dbproj->exec($sql);
    }

    public function deleteDB($dbproj, $dbname)
    {
        $sql = "
            DROP DATABASE IF EXISTS $dbname;
            USE $dbname;
            ";

        echo $sql . "<br>";

        $dbproj->exec($sql);
    }

    public function createTableDB($dbproj, $dbname)
    {
        $sql2 = "
            CREATE TABLE IF NOT EXISTS channelsall
            (
            channeltitle VARCHAR(100),
            channelhome VARCHAR(100),
            channellink VARCHAR(100),
            channeldate INTEGER,
            PRIMARY KEY (channeltitle)
            );
            USE $dbname;
            ";

        echo $sql2 . "<br>";
        $dbproj->exec($sql2);

        $sql3 = "
            CREATE TABLE IF NOT EXISTS itemsall(
            channel VARCHAR(100),
            guid VARCHAR(100),            
            title VARCHAR(100),
            content TEXT,
            date INTEGER,
            url VARCHAR(100),
            imagelink VARCHAR(255),
            read BOOLEAN;
            PRIMARY KEY(guid),
            FOREIGN KEY(channel) REFERENCES channelsall(channeltitle)            
            );
            USE $dbname;
            ";

        echo $sql3 . "<br>";
        $dbproj->exec($sql3);
    }

    public function fillTableDB($dbproj, $dbname, $channellist)
    {

        foreach($channellist as $channel){
            $channeltitle = $channel->title;
            $channelhome = $channel->siteurl;
            $channellink = $channel->url;
            $channeldate = $channel->date; # date muss in Channel noch auf Unix gebaut werden

        
        $sql4 = "
            INSERT INTO channelsall
            (channeltitle, channelhome, channellink, channeldate)
            VALUES('$channeltitle','$channelhome','$channellink','$channeldate')
            ON DUPLICATE KEY UPDATE
            channelhome = $channelhome,
            channellink = $channellink,
            channeldate = $channeldate;
            USE $dbname;
            ";

        echo $sql4 . "<br>";
        $dbproj->exec($sql4);

        foreach($channel->content as $item){
            $channel = $channel->title;
            $guid = $item->guid;
            $title = $item->title;
            $content = $item->content;
            $date = $item->date;
            $url = $item->url;
            $imagelink = $item->imagelink;
            $read = $item->read;

            $sql5 = "
        INSERT IGNORE INTO itemsall
        (channel, guid, title, content, date, url, imagelink, read)
        VALUES('$channel','$guid','$title','$content','$date','$url','$imagelink','$read');
        USE $dbname;
        ";
        
        echo $sql5 . "<br>";        
        $dbproj->exec($sql5);
        }

        }
        

        

        
    }
}
