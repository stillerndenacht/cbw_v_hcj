<?php
class ChannelList
{
    use HelpFunctions;
    use PDOFunctions;


    public $channelArray = [];
    public $dbchannelArrayItems = [];
    public $dbproj;
    public $dbname = "";

    public function __construct($dbname = "dbprojekt")
    { 
        $this->dbname = $dbname;
        $this->createDB($dbname);
        $this->createTableDB($dbname);
        $this->loadchannellist();
        #var_dump($this->channelArray);
    }
    public function setChannel($feedurl)
    { 
        $feedObj = $this->loadfeed($feedurl);
        $this->fillTableDB($this->dbname, [$feedObj]);
        $this->loadchannellist();

        // #----------------------------------
        // if ($channel = $this->feedurlexists($feedurl, $this->channelArray)) {
        //     echo "---- feed exists ---- ";
        //     #var_dump($channel);
        //     $feedObj = $this->loadfeed($feedurl);
        //     $this->fillTableDB('dbprojekt', [$feedObj]);
        //     # das objekt geht direkt in die Datenbank (ausortieren in fillTable)
        //     # aber ist das nötig? werden nicht die Duplicates in channelsall aussortiert?
        // } else {
        //     # es ist neu - wird in channelsall in DB angelegt
        //     # und danach in die fillTable geschickt
        //     $feedObj = $this->loadfeed($feedurl);
        //     $this->channelArray[] = $feedObj;
        //     $this->savechannellist();
        // }
        // $this->loadchannellist();
        #var_dump($this->channelArray);
        
    }
    public function savechannellist()
    {
        # functions aus PDOFunctions die SQL-Statements ausführen
        
        $this->fillTableDB($this->dbname, $this->channelArray);
    }
    public function loadchannellist()
    {       
        $this->channelsallDBtochannelArray($this->dbname);
        $this->channelitemsDBtodbchannelArray($this->dbname);
        echo "<hr> var_dump this->channelArray <hr>";
        var_dump($this->channelArray);
        echo "<hr>";
        echo "<hr> var_dump this->dbchannelArrayItems <hr>";
        var_dump($this->dbchannelArrayItems);
        echo "<hr>";
    }
}
