<?php
class RssColumn
{
    public $guid = '';
    public $title = '';
    public $channel = '';
    public $content = '';
    public $date = 0;
    public $url = '';
    public $imagelink = '';
    public $readed = false;

    public function __construct($item, $channel)
    {
        $this->guid = $item->guid;
        $this->title = htmlspecialchars($item->title) ;
        $this->channel = $channel;
        $this->content = htmlspecialchars(strip_tags($item->description));
        $this->date = (new DateTime($item->pubDate))->format("U");
        $this->url = $item->link;
        $this->imagelink = $this->checkenclosure($item, 'image');
    }

    public function checkenclosure($item, $what)
    {
        if ($what == 'image'){
            $imagelink = '';
            if (($item->enclosure)) {
                foreach ($item->enclosure->attributes() as $attrkey => $attrvalue) {
                    if (($attrkey == 'type') && ($attrvalue == 'image/jpeg')) {
                        $imagelink = $item->enclosure->attributes()->url;
                    }
                }
            }
            return $imagelink;
        }
    }
}
