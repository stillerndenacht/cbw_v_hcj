<?php
#var_dump(pathinfo('https://www.zdf.de/rss/zdf/nachrichten'));
#var_dump(linkinfo('https://www.zdf.de/rss/zdf/nachrichten'));
var_dump(parse_url('https://www.zdf.de/rss/zdf/nachrichten'));
echo "<hr>";
#var_dump(get_headers('https://www.zdf.de/rss/zdf/nachrichten', true));
#var_dump(get_headers('https://www.tagesschau.de/infoservices/alle-meldungen-100.html', true));
#var_dump(get_headers('https://taz.de/Wahlergebnis-in-Westdeutschland/!6068621/', true));

echo "<hr>";

#var_dump(get_headers('https://www.zdf.de/rss/zdf/nachrichten', true)["Content-Type"]);
// var_dump(get_headers('https://www.tagesschau.de/infoservices/alle-meldungen-100.html', true));
#var_dump(get_headers('https://taz.de/Wahlergebnis-in-Westdeutschland/!6068621/', true)["content-type"]);

echo "<hr>";
#$link = 'https://taz.de/Wahlergebnis-in-Westdeutschland/!6068621/';
#$link = 'https://www.zdf.de/rss/zdf/nachrichten';
$link = 'https://www.tagesschau.de/infoservices/alle-meldungen-100.html';
// if($contenttype = (get_headers($link, true)["content-type"]) ?? (get_headers($link, true)["Content-Type"]) ){
//     echo $contenttype;
// }

$url = 'https://www.tagesschau.de/infoservices/alle-meldungen-100.html';
$url = 'https://www.zdf.de/rss/zdf/nachrichten';
function checkContentType1($url)
{
    if ($contenttype = (get_headers($url, true)["content-type"]) ?? (get_headers($url, true)["Content-Type"])) {
        return $contenttype;
    }
}
function checkContentType(String $url)
{
    if ($contenttype = (get_headers($url, true)["content-type"]) ?? (get_headers($url, true)["Content-Type"])) {
        return strtolower(explode(";", $contenttype)[0]);
    }
}

echo checkContentType($link);
echo "<hr>";
#echo strtolower(explode(";", checkContentType1($link))[0]);
echo "<hr>";
$typetocheck = 'text/html';

function stripRssOut($url, $typetocheck)
{ 
    if (checkContentType($url) == $typetocheck) {
        $urlnew = $url;
    } else { 
        $patharr = explode("/", parse_url($url)["path"]);
        foreach($patharr as $pathelem){
            echo $pathelem."<br>";
            if(!(($pathelem == 'rss')&&($pathelem == ''))){ $p = '/'.$pathelem;
            $p = ++$p;
            echo $p."<br>";}
        }
        var_dump($patharr);
        $glueString = parse_url($url)["host"];
    }
    #return $urlnew;
}
stripRssOut($url,$typetocheck);
