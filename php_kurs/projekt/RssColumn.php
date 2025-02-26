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
    public $read = false;

    public function __construct($item, $channel)
    {
        $this->guid = $item->guid;
        #$this->title = $item-> ;
        $this->channel = $channel;
        $this->content = $item->description;
        $this->date = (new DateTime($item->pubDate))->format("U");
        $this->imagelink = $this->checkenclosure($item, 'image');
    }

    public function checkenclosure($item, $what)
    {
        if ($what == 'image'){
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
