<?php
trait Save_Load{
    public function loadfeed($feedurl)
{
    if (($feed = simplexml_load_file($feedurl)) != false) {
        $feedObj = new Channel($feed, $feedurl);
    
    }
    return $feedObj;
}
}