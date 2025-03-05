<?php
class ChannelList
{
    use HelpFunctions;
    use PDOFunctions;


    public $channelArray = [];
    public $dbproj;

    public function __construct()
    {
        $this->loadchannellist();
        #var_dump($this->channelArray);
    }
    public function setChannel($feedurl)
    {
        if ($channel = $this->feedurlexists($feedurl, $this->channelArray)) {
            echo "---- feed exists ----";
            var_dump($channel);
            $feedObj = $this->loadfeed($feedurl);
            $this->fillTableDB('dbprojekt', [$feedObj]);
        } else {
            $feedObj = $this->loadfeed($feedurl);
            $this->channelArray[] = $feedObj;
            $this->savechannellist();
        }
        $this->loadchannellist();
        #var_dump($this->channelArray);
        
    }
    public function savechannellist()
    {
        # functions aus PDOFunctions die SQL-Statements ausführen
        $this->createDB('dbprojekt');
        $this->createTableDB('dbprojekt');
        $this->fillTableDB('dbprojekt', $this->channelArray);
    }
    public function loadchannellist()
    {
        $this->getTablesDB('dbprojekt', $this->channelArray);
        # if channellist in DB dann laden
    }
}
