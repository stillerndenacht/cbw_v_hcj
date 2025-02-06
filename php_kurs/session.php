<?php
session_start();
# session_start() muss auf jede Seite die auf die Sessiondaten zugreifen soll
var_dump($_SESSION);
# Parameter dazu in php.ini
# session.auto_start=0
# session.gc_maxlifetime=1440 # maximale Laufzeit einer session-id 24min - wird ab dann irgendwann vom garbage-collector gelöscht

# dateien die die session-id darstellen und in denen session-infos eingetragen werden,finden sich unter C:\xampp\tmp
# Bsp.:            sess_6gs2l8vpq2poarj8cdgbh7miec
# der Cookie dazu Name: PHPSESSID
# Value:                6gs2l8vpq2poarj8cdgbh7miec

echo "<hr>";

$_SESSION['myname'] = 'myvalue';
$_SESSION['time'] = new DateTime();
$_SESSION['loggedin'] = 'ja';
var_dump($_SESSION);
echo "<hr>";

# löschen der gesetzten Werte
// unset($_SESSION['myname']);
// unset($_SESSION['loggedin']);
var_dump($_SESSION);
echo "<hr>";

# Sicherheitsfunktion: wechselt die Session-id bei jedem Aufruf und kopiert den Inhalt der session-Datei in die neue Datei
session_regenerate_id();
# wenn die alten Dateien direkt gelöscht werden sollen ->
session_regenerate_id(true);

var_dump($_SESSION);
echo "<hr>";

# Wechselt die Session-id alle paar Aktionen (dafür die session_regenerate() oben auskommentieren)             
if (isset($_SESSION['count']) && $_SESSION['count'] >= 0 && $_SESSION['count'] < 3) {
    $_SESSION['count']++;
} else {
    $_SESSION['count'] = 0;
    session_regenerate_id();
}
var_dump($_SESSION);
echo "<br>----- Cookie PHPSESSID wechselt -----<br>";
var_dump($_COOKIE);
