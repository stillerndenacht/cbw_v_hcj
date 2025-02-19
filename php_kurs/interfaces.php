<?php
# sinnvollerweise sammelt man interfaces als Einzeldateien (Name.inter.php) in einem Ordner interfaces, von wo man sie includieren kann
interface Face{
    const FACE = 'Face it';
    # functions in Interfaces sind immer abstrakt und immer public - d.h. sie müssen in erbenden Klassen implementiert werden
function outofface();
}

interface InYour{
    function outofinyour();
}

interface InYourFace extends InYour, Face{
    
}

class Super implements InYourFace{
    function outofface(){
        echo __METHOD__."<br>";
        echo Face::FACE."<br>";
    }
    function outofinyour(){
        echo __METHOD__."<br><br>";        
    }
}

$super = new Super();
$super->outofface();
$super->outofinyour();
echo $super::FACE;