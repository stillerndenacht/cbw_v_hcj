<?php
include_once 'classes/Includiert.class.php';
// wenn viel includiert werden muss, dann eine Datei anlegen die hier includiert wird, und alle anderen includiert
// das kann dann eine init.inc.php sein, in der  man auch :
// session_start() 
// declare(strict_types=1) und andere Dinge unterbringen kann
// siehe hierzu auch klCompany.php includes/KlCompInit.inc.php

class Includator
{
    public $name = 'IncludatorKlasse';

    public function includatorFunc() {}
}
# -----------------------
// Die Alternative zum Includieren aller Classes per include-Zeile ist der Autoloader - wobei dafür streng auf die einheitliche Benennung der class und Dateinamen geachtet werden muss, sonst funktioniert das Schema nicht, welches den Dateipfad zurechtkombiniert

echo "<hr> ------- Autoloader ------ <br>";
#function __autoload($name){} # das funktionierte nur bis PHP 7

function meinautoloaderClass($name)
{ # nur zur Anschauung - der $name entspricht dem class Name der den nicht gefunden wird (wenn die Datei nicht includiert ist)
    echo $name . "<br>";

    # nur zur Anschauung
    echo 'mein AutoloaderClass lädt <br>';

    # das ist die wichtige Zeile + Registrierung s.u.
    include_once 'classes/' . $name . '.class.php';
}

# -- optimierte Version mit Fehlerbehandlung
function meinautoloaderInc($name)
{
    echo $name . "<br>";
    $dateipfad = 'includes/' . $name . '.inc.php';
    if (file_exists($dateipfad)) {
        echo 'mein AutoloaderInc lädt <br>';
        include $dateipfad;
    } else {
        echo $dateipfad . "   konnte nicht gefunden werden";
        die;
        # "die" damit nicht noch die Fehlermeldung kommt oder das script weiterläuft
    }
}

# Registrieren der function meinautoloader zur automatischen Ausführung
spl_autoload_register('meinautoloaderClass');

# so könnte man mehrere Autoloader registrieren, die dann verschiedene Pfade bedienen
spl_autoload_register('meinautoloaderInc');

$autoload = new Autoloaded('AutoLoaded');
echo $autoload->name;
