<?php
# declare(strict_types=1);

$array = [100, 10.5, 'Hallo', true];
$array[] = 200;

var_dump($array);

$person1 = ['vname' => 'Hans', 'nname' => 'Glück'];
$person2 = ['vname' => 'Soraja', 'nname' => 'Salamander'];

echo $person1['vname'] . "<br>" . $person2['vname'];
echo "<hr>";

# ---------- Grundbauplan

class Klasse
{
    public $attribute1 = '';
    public $attribute2 = 'String';
    private $attributeP = 'private'; # ist nur innerhalb der Klasse zugänglich
}
$object = new Klasse();

# ----------


class Person
{
    public $vname = '';
    public $nname = 'Unbekannt';
    private $privatename = 'tooPrivate to tell';
}
$person3 = new Person;

var_dump($person3);


# --- Objekt zu Array verwandeln
echo "<hr>------- Objekt als Array -------------<br>";
$personArr = (array)$person3;
var_dump($personArr);
// Ausgabe: 
//  array(3) { 
//     ["vname"]=> string(0) "" 
//     ["nname"]=> string(9) "Unbekannt" 
//     ["Personprivatename"]=> string(18) "tooPrivate to tell" 
// }

echo $personArr['vname'];
echo $personArr['nname'];
# echo $personArr['Personprivatename']; # das geht nicht weil private


# ---- Zugriff in einfach aber nicht gut ----- 
echo "<hr>------- einfacher Zugriff -------------<br>";

echo $person3->vname . "<br>"; # Ausgabe des Attribut-Values: leer
echo $person3->nname . "<br>"; # Ausgabe des Attribut-Values: Unbekannt
# echo $person3->privatename; # geht nicht, weil private
echo "<hr>";

$x = 'nname';
echo $person3->$x . "<br>"; # der Value von $x wird eingesetzt Ausgabe: Unbekannt

$person3->nname = 'Neu Unbekannt'; # überschreibt direkt
echo $person3->nname . "<br>";

# ------- bessere Zugriffssteuerung über Methoden ---------
echo "<hr>------- Zugriff über Methoden -------------<br>";

class PersonB
{
    # alles private um den unbefugten Zugriff zu erschweren
    private $vname = 'Private';
    private $nname = 'Idaho';
    private $privatename = 'tooPrivate to tell';

    function getVname(){
        return $this->vname; # $this bezieht sich auf das aktuelle Objekt
    }
    function getNname(){
        return $this->vname;
    }

    function setVname(String $setvn) # functions sind default public, hier mit Datentyp string
    {
        echo __METHOD__."<br>"; # gibt den Namen der Methode zurück
        $this->vname = $setvn;
    }

    public function setNname($setnn = 'Default')
    {
        $this->nname = $setnn;
    }

    public function setNname2($setnn)
    {
        $setnn = trim($setnn);
        if(!empty($setnn)) $this->nname = $setnn;
    }

# set beide mit Array-Übergabe
    public function setNames($namesArr)
    {
       $this->vname = $namesArr[0];
        $this->nname = $namesArr[1];

    }
}
echo "<hr>------- Namen setzen als Array -------------<br>";
$person4 = new PersonB;
$person4->setNames(['Arri', 'Chang']);
var_dump($person4);
echo "<br>";

echo "<hr>------- setVname mit Ausgabe __METHOD__ -------------<br>";
$person4->setVname('Oni');
var_dump($person4);
echo "<br>";

echo "<hr>------- setNname2 Prüfung ob leerer String -------------<br>";
$person4->setNname2('     ');
var_dump($person4);
echo "<br>";

echo "<hr>------- setNname mit default Name -------------<br>";
$person4->setNname();
var_dump($person4);

