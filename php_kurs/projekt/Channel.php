<?php
class Channel
{
    use HelpFunctions;

    public $title = '';
    public $date = 0;
    public $url = '';
    public $siteurl = '';
    public $channelcount = 0;
    public $content = [];


    public function __construct($feed, $feedurl)
    {
        // #---------------------------
        // echo "<hr>aus Channel construct feed <br>";
        // var_dump($feed);
        // echo "<hr>aus Channel construct feedurl <br>";
        // var_dump($feedurl);
        // echo "<hr>";
        // #----------------------------
        # if $feedurl schon in der DB load aus DB und append - else:
        $this->title    = htmlspecialchars($feed->channel->title);
        $this->date     = (new DateTime($feed->channel->pubDate))->format("U");
        $this->url      = $feedurl;
        $this->siteurl  = $this->removeRss($feed->channel->link);
        $this->setContent($feed, $this->title);

        // #---------------------------
        // echo "<hr>aus Channel construct this <br>";
        // var_dump($this->title);
        // var_dump($this->date);
        // var_dump($this->url);
        // #----------------------------

        $this->channelcount = count($this->content);
    }

    public function setContent($feed, $channel)
    {
        // #------------------------
        // echo "<hr>aus Channel setContent feed <br>";
        // var_dump($feed->channel->item);
        // #-----------------------------
        foreach ($feed->channel->item as $item) {
            // echo "<hr>aus Channel setContent loop item <br>";
            // var_dump($item);
            // #-----------------------------
            $i = new RssColumn($item, $channel);
            // #------------------------
            // echo "<hr>aus Channel setContent loop i <br>";
            // var_dump($i);
            // #-----------------------------
            $this->content[] = $i;
        }
    }
}
