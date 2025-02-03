<?php
var_dump($_COOKIE); # auslesen von Cookies mit Superglobal $_COOKIE (nicht setzen)
//  bevor irgendetwas geschickt wird müssen die cookies erledigt werden - weil sie in den header gehören
// später gesetzte Cookies werden erst beim nächsten Aufruf sichtbar
// deswegen sollte man nix vor dem setcookie machen (?)
# echo "Cookie verpasst<br>";
# diese Cookies werden erst nach dem echo gesetzt
# deswegen werden sie erst beim zweiten Aufruf gefunden
# Session-Cookies werden gelöscht, wenn der Browser beendet wird oder bspw. eine neues privates Fenster aufmacht

setcookie('cookiename', 'Cookoo');
setcookie('cookiename', 'Cookoo2'); # Änderung des Cookie-Values

# setcookie('cookiename2','Kuckuck'); # auch wenn der cookie nur einmal gesetzt wird, bleibt er im Cookie-Speicher des Browsers erhalten (bis Session-Ende)
setcookie('cookieort', 'hier');
echo "Cookie gesetzt<br>";

if (isset($_COOKIE['randomcookie'])) echo $_COOKIE['randomcookie'] . " >> ist der randomcookie<br>";
else {
    echo "dich kenn ich noch nicht, ich geb dir eine zufällige Nr.!";
    setcookie('randomcookie', rand(100, 999));

    # setcookie maskiert auch automatisch
    setcookie('setcookie', 'Leer Zeichen Cookoo');

    # setrawcookie maskiert nix -> muss man selbst machen
    setrawcookie('rawcookie', 'Leer%20Zeichen%20Cookoo'); 

    #header('Location: cookie.php'); # setzt eine Weiterleitung auf den header - ruft  also die Seite neu auf, damit der cookie gleich da ist
}
echo "<hr>";
setcookie('mittime','timejetzt', time()); # nur gültig bis jetzt/bzw. session ende
setcookie('mittimeplus','timejetztplus', time()+120); # wenn man den auskommentiert ist er beim neu laden nach 2 min nicht mehr da
# so kann man auch cookies über die session hinaus festlegen ca. max 400 Tage

if(isset ($_COOKIE['count'])){ setcookie('count',$_COOKIE['count']+1);} else{
    setcookie('count', 1);
}
var_dump(headers_list());
# weitere optionale Angaben:
// setcookie('cookiename', 'cookiewert', verfallsdatum, 'pfad','domain','secure?')
// pfad : meistens '/' wenn die Datei in diesem Verzeichnis liegt, dann wird der Cookie gesetzt
// domain: Cookie wird für bestimmte domains gesetzt bsp.: 'de.wiki.org', wenn er an alle subdomains gehen soll setzt man ggf. den Punkt '.wiki.org' (ist aber wohl bei modernen Browsern nicht zwingend)
// secure: true/false wenn true :der Cookie wird nur gesetzt, wenn über https verschickt wird (bei http nicht)

# löschen des cookie : Wert auf leer setzen, Zeit in Vergangenheit (hier Unix-0 Zeit), Pfad muss passen, secure Attribut muss passen )
setcookie('test','',0,'/','' , true);
setcookie('test','',0);
