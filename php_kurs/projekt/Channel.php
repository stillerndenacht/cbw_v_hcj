<?php
class Channel
{
    public $title = '';
    public $content = [];
    public $date = 0;
    public $url = '';
    public $siteurl = '';
    public $channelcount = 0;

    public function __construct($feed, $feedurl)
    {
        # if $feedurl schon in der DB load aus DB und append - else:
        $this->title = $feed->channel->title;
        $this->date = $feed->channel->pubDate;
        $this->url = $feedurl;
        $this->setContent($feed, $this->title);



        #$this->channelcount = $this->content->count();

    }

    public function setContent($feed, $channel)
    {
        foreach ($feed->item as $item) {
            $i = new RssColumn($item, $channel);
            $this->content[] = $i;
        }
    }
}
