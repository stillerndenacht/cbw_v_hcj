<?php
declare(strict_types=1);
session_start();

# includieren per include-Zeile...
// include_once 'classes/KlCompany.class.php';
// include_once 'classes/KlPerson.class.php';
// include_once 'classes/KlAdress.class.php';

# .. oder so: mit Autoloader ...
function myAutoloaderClass($name)
{
    
    $dateipfad = 'classes/Kl' . $name . '.class.php';
    if (file_exists($dateipfad)) {
        
        include $dateipfad;
    } else {
        echo $dateipfad . "   konnte nicht gefunden werden";
        die;
    }
}

spl_autoload_register('myAutoloaderClass');