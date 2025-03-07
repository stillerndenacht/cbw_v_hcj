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
    }
    public function setChannel($feedurl)
    {
        $feedObj = $this->loadfeed($feedurl);
        $this->fillTableDB($this->dbname, [$feedObj]);
        $this->loadchannellist();
    }
    public function savechannellist()
    {
        $this->fillTableDB($this->dbname, $this->channelArray);
    }
    public function loadchannellist()
    {
        $this->channelsallDBtochannelArray($this->dbname);
        $this->channelitemsDBtodbchannelArray($this->dbname);
        
        // echo "<hr> var_dump this->channelArray <hr>";
        // var_dump($this->channelArray);
        // echo "<hr>";
        // echo "<hr> var_dump this->dbchannelArrayItems <hr>";
        // var_dump($this->dbchannelArrayItems);
        // echo "<hr>";
    }
}
