<?php
trait PDOFunctions
{ #-------------------------------------------------------
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
        } catch (PDOException $e) {
            echo $e->getMessage();
            die("<br>Diese DB : $dbname existiert nicht");
        }
        return $dbproj;
    }
    #-------------------------------------------------------

    public function createDB($dbname)
    {
        $dbproj = $this->connectDB();
        $sql = "             
            CREATE DATABASE IF NOT EXISTS $dbname;
            USE $dbname; 
            ";

        $dbproj->exec($sql);
    }

    public function deleteDB($dbname)
    {
        $dbproj = $this->connectDB();
        $sql = "
            DROP DATABASE IF EXISTS $dbname;
            USE $dbname;
            ";

        $dbproj->exec($sql);
    }

    public function createTableDB($dbname)
    {
        $dbproj = $this->connectDB();
        $sql2 = "
            CREATE TABLE IF NOT EXISTS channelsall
            (
            title VARCHAR(100),
            siteurl VARCHAR(100),
            url VARCHAR(100),
            date INTEGER,
            PRIMARY KEY (title)
            );
            USE $dbname;
            ";

        $dbproj->exec($sql2);

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
            readed BOOLEAN,
            PRIMARY KEY (guid)            
            );
            USE $dbname;
            ";
        # FOREIGN KEY (channel) REFERENCES channelsall(channeltitle)
        # das geht leider nicht, weil das einen Unique Index ergibt, der dann erkannt wird - was dazu führt, dass für jeden channel nur ein item in der DB landet
        #echo $sql3 . "<br>";

        $dbproj->exec($sql3);
    }
    #----------------------------------------------------------
    public function fillTableDB($dbname, $channelArray)
    {
        $dbproj = $this->connectDB();

        foreach ($channelArray as $channel) {

            $title      = $channel->title;
            $siteurl    = $channel->siteurl;
            $url        = $channel->url;
            $date       = $channel->date;

            $sql4 = "
            INSERT INTO channelsall
            (title, siteurl, url, date)
            VALUES('$title','$siteurl','$url','$date')
            ON DUPLICATE KEY UPDATE
            siteurl = '$siteurl',
            url = '$url',
            date = $date;
            USE $dbname;
            ";

            $dbproj->exec($sql4);

            foreach ($channel->content as $item) {

                $channel = $item->channel;
                $guid = $item->guid;
                $title = $item->title;
                $content = $item->content;
                $date = $item->date;
                $url = $item->url;
                $imagelink = $item->imagelink;
                $readed = $item->readed;

                $sql5 = "
                INSERT IGNORE INTO itemsall
                (channel, guid, title, content, date, url, imagelink, readed)
                VALUES('$channel','$guid','$title','$content',$date,'$url', '$imagelink','$readed');
                USE $dbname;
                ";

                $dbproj->exec($sql5);
            }
        }
    }

    # ---------------------------------------------------

    public function channelsallDBtochannelArray($dbname)
    {
        $dbproj = $this->connectDB();

        $dbproj->exec("USE $dbname");
        $sql6 = "
        SELECT * FROM channelsall;
        ";

        $statement = $dbproj->query($sql6);
        $dbchannellist = $statement->fetchAll();

        foreach ($dbchannellist as $channel) {

            if (!in_array($channel, $this->channelArray)) {
                $this->channelArray[] = $channel;
            }
        }
    }

    public function getChannel($dbname, $channelname)
    {
        $dbproj = $this->connectDB();

        $dbproj->exec("USE $dbname");

        $sql7 = "
        SELECT * FROM itemsall WHERE channel = '$channelname' ORDER BY date DESC ;
        ";

        $statement = $dbproj->query($sql7);
        $dbitemlist = $statement->fetchAll();

        return $dbitemlist;
    }

    public function channelitemsDBtodbchannelArray($dbname)
    {
        foreach ($this->channelArray as $channel) {
            $channelname = $channel['title'];

            $dbitemlist =  $this->getChannel($dbname, $channelname);

            $this->dbchannelArrayItems[$channelname] = $dbitemlist;
        }
    }
}
