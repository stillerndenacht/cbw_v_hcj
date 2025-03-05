<?php
trait HelpFunctions
{
    use HelpFunctions2;

    public function feedurlexists($feedurl, $channelArray)
    {
        foreach (($channelArray) as $channel) {
            echo "<hr>";
            var_dump($channel);
            echo "<hr>";
            if ($channel['url'] == $feedurl) {
                echo "<hr>".$feedurl."<hr>";
                return $channel;
            }
        }
    }
    public function loadfeed($feedurl)
    {
        if (($feed = simplexml_load_file($feedurl)) != false) {
            $feedObj = new Channel($feed, $feedurl);
        }
        return $feedObj;
    }

    # ---- entfernt den rss Teil aus der url (verwendet stripUrlPartsOut und checkContentType)
    public function removeRss($url)
    {
        $typetocheck = ['text/html'];
        $stripout = ["", "rss"];
        $urlnew = $this->removeUrlParts($url, $typetocheck, $stripout);
        return $urlnew;
    }
}
trait HelpFunctions2
{

    # ---- Check eines Links gibt den Content-Type aus dem Header zurück ---
    public function checkContentType(String $url)
    {
        if ($contenttype = (get_headers($url, true)["content-type"]) ?? (get_headers($url, true)["Content-Type"])) {
            return strtolower(explode(";", $contenttype)[0]);
        }
    }

    public function removeUrlParts($url, array $typetocheck, array $stripout)
    {
        if (in_array($this->checkContentType($url), $typetocheck)) {
            $urlnew = $url;
        } else {
            $patharr = explode("/", parse_url($url)["path"]);
            foreach ($patharr as $pathelem) {

                $urlnew = parse_url($url)["scheme"] . "://" . parse_url($url)["host"];

                if (!in_array($pathelem, $stripout)) {
                    $p = '/' . $pathelem;
                    $glueString =  $urlnew . $p;

                    if (in_array($this->checkContentType($glueString), $typetocheck)) {
                        $urlnew = $glueString;
                    }
                }
            }
        }
        return $urlnew;
    }
}
