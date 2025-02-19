<?php

function myAutoloaderInterfaces($name)
{
    
    $dateipfad = 'interfaces/' . $name . '.inter.php';
    
    if (file_exists($dateipfad)) {
        
        include $dateipfad;
    } else {
        echo $dateipfad . "   konnte nicht gefunden werden";
        die;
    }
}

spl_autoload_register('myAutoloaderInterfaces');