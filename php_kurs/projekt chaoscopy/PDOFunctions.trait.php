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
        #echo $sql . "<br>";

        $dbproj->exec($sql);
        // echo "<hr> aus createDB :";
        // var_dump($dbproj);
        // echo "<hr>";
    }

    public function deleteDB($dbname)
    {
        $dbproj = $this->connectDB();
        $sql = "
            DROP DATABASE IF EXISTS $dbname;
            USE $dbname;
            ";

        #echo $sql . "<br>";

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

        #echo $sql2 . "<br>";
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

    public function fillTableDB($dbname, $channelArray)
    {
        $dbproj = $this->connectDB();
        echo "<hr>dump auf channelArray in fillTableDB<hr>";
        #var_dump($channelArray);
        echo "<hr>";
        foreach ($channelArray as $channel) {
            #var_dump($channel->title);            
            $title      = $channel->title;
            $siteurl    = $channel->siteurl;
            $url        = $channel->url;
            $date       = $channel->date;


        // foreach ($channelArray as $channel) {
        //     #var_dump($channel->title);

        //     $title = $channel['title'];
        //     $siteurl = $channel['siteurl'];
        //     $url = $channel['url'];
        //     $date = $channel['date'];



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

            #echo $sql4 . "<br>";
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

                #echo $sql5 . "<br>";
                $dbproj->exec($sql5);
            }
        }
    }

    # ---------------------------------------------------

    public function channelsallDBtochannelArray($dbname)
    {
        $dbproj = $this->connectDB();
        var_dump($dbproj);
        $dbproj->exec("USE $dbname");
        $sql6 = "
        SELECT * FROM channelsall;
        ";

        #echo $sql6 . "<br>";
        $statement = $dbproj->query($sql6);
        #var_dump($statement);
        $dbchannellist = $statement->fetchAll();
        #echo "<hr>";
        #var_dump($dbchannellist);
        foreach ($dbchannellist as $channel) {
            #echo "<hr>";
            #var_dump($channel);
            if (!in_array($channel, $this->channelArray)) {
                $this->channelArray[] = $channel;
                echo "<hr>" . $channel['title'] . " filled in Array<hr>";
            }
        }

        echo "<hr>dump auf channelArray nach channelsallDBtochannelArray<hr>";
        #var_dump($this->channelArray);
        echo "<hr>";
        // echo "<hr>";
        // var_dump($channelArray);
        // $this->channelArray = $channelArray;
        // echo "<hr>--- two channelArrays ----<hr>";
        #var_dump($this->channelArray);
        // echo "<hr>";
    }
    # ---- to be deletet
    public function callChannelnames()
    {
        foreach ($this->channelArray as $channel) {
            $channelname = $channel['title'];
            echo "<hr>" . $channelname;
            #return $channelname;
        }
    }
    # ---------
    public function getChannel($dbname, $channelname)
    {
        $dbproj = $this->connectDB();
        #var_dump($dbproj);
        $dbproj->exec("USE $dbname");
        $sql7 = "
        SELECT * FROM itemsall WHERE channel = '$channelname' ORDER BY date DESC ;
        ";

        #echo $sql7 . "<br>";
        $statement = $dbproj->query($sql7);
        #var_dump($statement);
        $dbitemlist = $statement->fetchAll();
        return $dbitemlist;
        // $dbchannelArray =[];
        // $dbchannelArray[$channelname] = $dbitemlist;
        // return $dbchannelArray;

    }

    public function channelitemsDBtodbchannelArray($dbname)
    {
        foreach ($this->channelArray as $channel) {
            $channelname = $channel['title'];
            #echo "<hr>" . $channelname;

            $dbitemlist =  $this->getChannel($dbname, $channelname);

            $this->dbchannelArrayItems[$channelname] = $dbitemlist;

        }
        echo "<hr>dump auf dbchannelArrayItems aus channelitemsDBtodbchannelArray<hr>";
        #var_dump($this->dbchannelArrayItems);
        echo "<hr>";
    }
}
