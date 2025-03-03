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
            CREATE TABLE IF NOT EXISTS itemsall(
            guid VARCHAR(100),
            PRIMARY KEY(guid),
            title VARCHAR(100),
            content TEXT,
            date INTEGER,
            url VARCHAR(100),
            imagelink VARCHAR(255),
            read BOOLEAN;

            channeltitle VARCHAR(100),
            channelhome VARCHAR(100),
            channellink VARCHAR(100),
            channeldate INTEGER
            );
            USE $dbname;
            ";

        echo $sql2 . "<br>";
        $dbproj->exec($sql2);
    }

    public function fillTableDB($dbproj, $dbname){
        $sql3 = "
            INSERT INTO itemsall
            (guid, title, content, date, url, imagelink, read, channeltitle, channelhome, channellink, channeldate)


        ";
        echo $sql3 . "<br>";
        $dbproj->exec($sql3);
    }
}
