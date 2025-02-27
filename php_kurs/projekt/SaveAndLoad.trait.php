<?php
trait SaveAndLoad
{
    public function loadfeed($feedurl)
    {
        if (($feed = simplexml_load_file($feedurl)) != false) {
            $feedObj = new Channel($feed, $feedurl);
        }
        return $feedObj;
    }
    # ---- Check eines Links gibt den Content-Type aus dem Header zurück ---
    public function checkContentType(String $url)
    {
        if ($contenttype = (get_headers($url, true)["content-type"]) ?? (get_headers($url, true)["Content-Type"])) {
            return strtolower(explode(";", $contenttype)[0]);
        }
    }


}
