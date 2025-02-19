<?php
include_once 'includes/interface_init.inc.php';


class Super implements SaveLoad{
    function save(){
        echo __METHOD__."<br>";
        # hier fehlt natürlich die eigentliche Funktionalität
    }
    function load(){
        echo __METHOD__."<br>";        
    }
}

$super = new Super();

$super = new Super();
$super->load();
$super->save();
