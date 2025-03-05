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
$link = 'https://www.zdf.de/rss/zdf/nachrichten';
#$link = 'https://www.tagesschau.de/infoservices/alle-meldungen-100.html';
// if($contenttype = (get_headers($link, true)["content-type"]) ?? (get_headers($link, true)["Content-Type"]) ){
//     echo $contenttype;
// }

$url = 'https://www.tagesschau.de/infoservices/alle-meldungen-100.html';
$url = 'https://www.zdf.de/rss/zdf/nachrichten';
$url = 'https://www.zdf.de/rss/zdf/politik-gesellschaft';
$url = 'https://taz.de/Wahlergebnis-in-Westdeutschland/!6068621/';
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

function stripRssOut1($url, $typetocheck)
{
    if (checkContentType($url) == $typetocheck) {
        $urlnew = $url;
    } else {
        $patharr = explode("/", parse_url($url)["path"]);
        foreach ($patharr as $pathelem) {
           #echo $pathelem . "<br>";
            $urlnew = parse_url($url)["scheme"] . "://" . parse_url($url)["host"];
            #echo $urlnew . "<br>";
            if (!(($pathelem == 'rss') || ($pathelem == ''))) { # hier könnte man stattdessen ein in_array benutzen auf einen ...param den man mit übergibt
                $p = '/' . $pathelem;
                $glueString =  $urlnew . $p;
                #echo $glueString . "<br>";
                if (checkContentType($glueString) == $typetocheck) {
                    $urlnew = $glueString;
                    #echo "new url? : " . $urlnew . "<br>";
                }
            }
        }
       
    }
    return $urlnew;
}
var_dump(stripRssOut1($url, $typetocheck));

#-----------------------------------------------
echo "<hr>";

$typetocheck = ['text/html','application/xml'];
$stripout = ["","rss"];

function stripUrlPartsOut($url, array $typetocheck, array $stripout)
{
    if (in_array(checkContentType($url),$typetocheck) ) {
        $urlnew = $url;
    } else {
        $patharr = explode("/", parse_url($url)["path"]);
        foreach ($patharr as $pathelem) {
           #echo $pathelem . "<br>";
            $urlnew = parse_url($url)["scheme"] . "://" . parse_url($url)["host"];
            #echo $urlnew . "<br>";
            if (!in_array($pathelem, $stripout)) { # hier könnte man stattdessen ein in_array benutzen auf einen ...param den man mit übergibt
                $p = '/' . $pathelem;
                $glueString =  $urlnew . $p;
                #echo $glueString . "<br>";
                if (in_array(checkContentType($glueString), $typetocheck)) {
                    $urlnew = $glueString;
                    #echo "new url? : " . $urlnew . "<br>";
                }
            }
        }
       
    }
    return $urlnew;
}
var_dump(stripUrlPartsOut($url, $typetocheck, $stripout));
#--------------------------------------------
echo "<hr>";
$x = "//:' hallo '<br>";
echo $x;
echo htmlspecialchars($x);
echo "<br>";
var_dump(htmlspecialchars($x));
echo "<hr>";
echo htmlentities($x);
echo "<br>";
var_dump(htmlentities($x));

echo "<br>";
$date6 = new DateTime("@1741186267");
echo $date6->format("d.m.Y H:i:s");
echo "<br>";
echo "<br>";
$date6 = new DateTime("@1741185900");
echo $date6->format("d.m.Y H:i:s");