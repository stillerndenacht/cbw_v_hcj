<?php
include 'includes/namespace1.inc.php';
include 'includes/namespace2.inc.php';

# das funktioniert normalerweise nicht, weil in diesen 2 includes die gleichen Funktionen und Konstanten drin sind
# deswegen legt man für die includes in den zu includierenden Dateien einen namespace fest - siehe dort

const CONSTANT = 'konstanze';
function i_am(){
    echo "ich bin .. <br>";
    echo __FUNCTION__.'<br>';
}
# aufrufen der resident function (theoretisch wird das rootverzeichnis als leerer String mit aufgerufen)
i_am();
# aufrufen der functionen aus den anderen namespaces
echo "<br>namespace1\i_am() aus namespace original ...<br>";
namespace1\i_am();
echo "<br>namespace2\i_am() aus namespace original ...<br>";
namespace2\i_am();