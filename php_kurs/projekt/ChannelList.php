<?php
class ChannelList
{ use Save_Load;

    public $channelArray = [];

    public function __construct()
    {
        $this->loadchannellist();
        #$this->channelArray[] = $ ?;
    }
    public function setChannel($feedurl)
    {
        $feedObj = $this->loadfeed($feedurl);
        $this->channelArray[] = $feedObj;
        $this->savechannellist();
    }
    public function savechannellist()
    {
        # SQL-Statement um zu saven
    }
    public function loadchannellist()
    {
        # if channellist in DB dann laden
    }
}


