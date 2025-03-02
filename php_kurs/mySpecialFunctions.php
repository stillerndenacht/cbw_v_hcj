<?php
# ----------<<<<< diese Funktionen laufen im php-Projekt >>>>>-----------------
# ----------<<<<< checkContentType >>>>>-----------------
# -- prüft welcher Contenttyp von einer url zurückgeliefert wird ----
# -- einige dafür verwendete php-functions ---

#var_dump(pathinfo('https://www.zdf.de/rss/zdf/nachrichten'));

var_dump(parse_url('https://www.zdf.de/rss/zdf/nachrichten'));
#var_dump(parse_url('https://google.com'));

#var_dump(get_headers('https://www.zdf.de/rss/zdf/nachrichten', true));
#var_dump(get_headers('https://www.tagesschau.de/infoservices/alle-meldungen-100.html', true));
#var_dump(get_headers('https://taz.de/Wahlergebnis-in-Westdeutschland/!6068621/', true));

echo "<hr>";

#var_dump(get_headers('https://www.zdf.de/rss/zdf/nachrichten', true)["Content-Type"]);
// var_dump(get_headers('https://www.tagesschau.de/infoservices/alle-meldungen-100.html', true));
#var_dump(get_headers('https://taz.de/Wahlergebnis-in-Westdeutschland/!6068621/', true)["content-type"]);
#var_dump(get_headers('https://google.com', true));


$url = 'https://www.tagesschau.de/infoservices/alle-meldungen-100.html';
$url = 'https://www.zdf.de/rss/zdf/nachrichten';
$url = 'https://www.zdf.de/rss/zdf/politik-gesellschaft';
$url = 'https://taz.de/Wahlergebnis-in-Westdeutschland/!6068621/';
#$url = 'https://google.com/';


# ----------<<<<< checkContentType >>>>>-----------------

###### funktioniert noch nicht, wenn der Content-Type ein Array liefert wie bei google(dafür wieder ein foreach)
// ---- leider wird der Contentyp wahlweise mit lower oder Upper-Case Buchstaben angegeben
function checkContentType(String $url)
{
    # wenn die url einen contentype zurückgibt, der im header des Response auslesbar ist ...
    if ($contenttype = (get_headers($url, true)["content-type"]) ?? (get_headers($url, true)["Content-Type"])) {
        # ... dann gib den teil bis zum ; als lowercase zurück (den man dann mit einem string vergleichen könnte) 
        return strtolower(explode(";", $contenttype)[0]);
        # Rückgabe bspw. application/xml oder text/html
    }
}
var_dump(checkContentType($url));

#-----------------------------------------------
echo "<hr>";

# ---<<<<< stripUrlPartsOut >>>>>--------------------

// -- Anwendungsbsp: der Rss-Feed liefert keinen funktionierenden link auf die normale html-Seite mit
// -- wirft Teile einer url aus dieser heraus wenn dadurch ein falscher Rückgabetyp entsteht 
// -- und setzt sie neu zusammen, 
// -- dabei überprüft sie, ob eine für einen bestimmten Rückgabecontent funktionierende url entsteht - 
// -- verwendet checkContentType()

# -- Typen auf die geprüft werden soll als Array eingeben
$typetocheck = ['text/html', 'application/xml'];
# -- Teile die entfernt werden sollen als Array 
# -- "/" muss nicht entfernt werden, "" sollte immer dabei sein
$stripout = ["", "rss"];

function stripUrlPartsOut($url, array $typetocheck, array $stripout)
{
    # wenn die url so wie sie ist funktioniert für die Typen, passiert nix
    if (in_array(checkContentType($url), $typetocheck)) {
        $urlnew = $url;
    } else {
        # die url wird am / zerlegt in Array-Teile
        $patharr = explode("/", parse_url($url)["path"]);
        # jedes Teil wird gecheckt ...
        foreach ($patharr as $pathelem) {
            #echo $pathelem . "<br>"; # nur zur Anschauung
            # basis-url wird neu zusammengesetzt (um dann erweitert zu werden)
            $urlnew = parse_url($url)["scheme"] . "://" . parse_url($url)["host"];
            #echo $urlnew . "<br>"; # nur zur Anschauung
            # wenn ein Array-Teil nicht dem zu entfernenden entspricht ...
            if (!in_array($pathelem, $stripout)) {
                # .. wird es um einen / ergänzt und an die basis-url gehängt
                $p = '/' . $pathelem;
                $glueString =  $urlnew . $p;
                #echo $glueString . "<br>"; # nur zur Anschauung
                # wenn das eine für den Typ funktionierende url ergibt, wird das zur neuen basis-url
                # wenn nicht wird der Array-Teil ignoriert und der nächste Array-Teil getestet
                if (in_array(checkContentType($glueString), $typetocheck)) {
                    $urlnew = $glueString;
                    #echo "new url? : " . $urlnew . "<br>"; # nur zur Anschauung
                }
            }
        }
    }
    # Rückgabe eine funktionierende url
    return $urlnew;
}

var_dump(stripUrlPartsOut($url, $typetocheck, $stripout));
