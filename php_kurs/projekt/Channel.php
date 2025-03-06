<?php
class Channel
{
    use HelpFunctions;

    public $title       = '';
    public $date        = 0;
    public $url         = '';
    public $siteurl     = '';
    public $channelcount = 0;
    public $content     = [];


    public function __construct($feed, $feedurl)
    {        
            $this->title    = htmlspecialchars($feed->channel->title);
        $this->date     = (new DateTime($feed->channel->pubDate))->format("U");
        $this->url      = $feedurl;
        $this->siteurl  = $this->removeRss($feed->channel->link);
        $this->setContent($feed, $this->title);   

        $this->channelcount = count($this->content);
    }

    public function setContent($feed, $channel)
    {        
        foreach ($feed->channel->item as $item) {
            
            $i = new RssColumn($item, $channel);            
            $this->content[] = $i;
        }
    }
}
