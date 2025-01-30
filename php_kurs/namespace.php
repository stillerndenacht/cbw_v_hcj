<?php
# siehe für weiteres auch die includes
include 'includes/namespace1.inc.php';
include 'includes/namespace2.inc.php';
# in namespace2 ist namespace3 includiert
include 'includes/namespaceKl.inc.php';
echo "<hr>";

# das funktioniert normalerweise nicht, weil in diesen 2 includes die gleichen Funktionen und Konstanten drin sind
# deswegen legt man für die includes in den zu includierenden Dateien einen namespace fest - siehe dort

const CONSTANT = 'konstanze';
function i_am(){
    echo "ich bin .. <br>";
    echo __FUNCTION__.'<br>';
    echo __NAMESPACE__.'<br>';
}
# aufrufen der resident function (theoretisch wird das rootverzeichnis als leerer String mit aufgerufen)
i_am();
echo "<hr>";

# aufrufen der functionen aus den anderen namespaces
echo "<br>namespace1\i_am() aus namespace original ...<br>";
namespace1\i_am();
echo "<hr>";

echo "<br>namespace2\i_am() aus namespace original ...<br>";
namespace2\i_am();
echo "<hr>";

echo "<br>namespaceKl\Klasse aus namespaceKl ...<br>";
$klasse = new namespaceKl\NamespaceKlasse();
$klasse->echoclass();
echo "<hr>";

# -------------------- use x as y ----------------

echo "-- mit use as --";
use namespace2\namespace3 as name23;
name23\i_am();
echo "<hr>";

#----------- namespaces XML ----------------------
# man kann auch namespaces für xml benutzen
# xmlns:media="url" ... siehe die rss-seiten diverser rss Anbieter
# https://www.w3schools.com/xml/xml_namespaces.asp