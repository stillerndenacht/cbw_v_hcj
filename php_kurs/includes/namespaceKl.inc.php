<?php
# wird includiert in namespace.php
namespace namespaceKl;



const CONSTANT = 'konstanze aus der namespaceKl in includes';

class NamespaceKlasse
{
    function echoclass()
    {
        echo "Grüße aus der namespaceKl <br>";
        echo __FUNCTION__ . "<br>";
        echo __CLASS__ . "<br>";
        echo __NAMESPACE__ . "<br>";
    }
}
