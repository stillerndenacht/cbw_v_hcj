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
        #$this->channelArray[] = $ ?;
    }
    public function setChannel($feedurl)
    {
        $feedObj = $this->loadfeed($feedurl);
        $this->channelArray[] = $feedObj;
        $this->savechannellist();#
    }
    public function savechannellist()
    {
        $this->createDB($this->dbproj, 'DBProjekt');
        #var_dump($dbproj);
        # SQL-Statement um zu saven
    }
    public function loadchannellist()
    {
        # if channellist in DB dann laden
    }
}
