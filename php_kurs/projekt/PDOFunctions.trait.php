<?php
trait PDOFunctions
{ #-----------
    public function connectDB()
    {
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
            $dbproj = new PDO("mysql:host=$host; dbname=$dbname; port=$port", $user, $pw, $options);
            var_dump($dbproj);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("<br>Diese DB : $dbname existiert nicht");
        }
        return $dbproj;
    }
    #------------

    public function createDB($dbname)
    {
        $dbproj = $this->connectDB();
        $sql = "             
            CREATE DATABASE IF NOT EXISTS $dbname; 
            USE $dbname; 
            ";
        echo $sql . "<br>";

        $dbproj->exec($sql);
    }

    public function deleteDB($dbname)
    {
        $dbproj = $this->connectDB();
        $sql = "
            DROP DATABASE IF EXISTS $dbname;
            USE $dbname;
            ";

        echo $sql . "<br>";

        $dbproj->exec($sql);
    }

    public function createTableDB($dbname)
    {
        $dbproj = $this->connectDB();
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
        #$dbproj = $this->connectDB();

        $sql3 = "
            CREATE TABLE IF NOT EXISTS itemsall
            (
            channel VARCHAR(100),
            guid VARCHAR(100),            
            title VARCHAR(100),
            content TEXT,
            date INTEGER,
            url VARCHAR(100),
            imagelink VARCHAR(255),
            read BOOL,
            PRIMARY KEY (guid),
            FOREIGN KEY (channel) REFERENCES channelsall(channeltitle)
            );
            USE $dbname;
            ";
        
        echo $sql3 . "<br>";
        $dbproj->exec($sql3);
    }

    public function fillTableDB($dbname, $channellist) # $channellist > channelArray anpassen
    {
        $dbproj = $this->connectDB();

        foreach ($channellist as $channel) {
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

            foreach ($channel->content as $item) {
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
