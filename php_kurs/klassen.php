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

    function getVname()
    {
        return $this->vname; # $this bezieht sich auf das aktuelle Objekt
    }
    function getNname()
    {
        return $this->vname;
    }

    function setVname(String $setvn) # functions sind default public, hier mit Datentyp string
    {
        echo __METHOD__ . "<br>"; # gibt den Namen der Methode zurück
        $this->vname = $setvn;
    }

    public function setNname($setnn = 'Default')
    {
        $this->nname = $setnn;
    }

    public function setNname2($setnn)
    {
        $setnn = trim($setnn);
        if (!empty($setnn)) $this->nname = $setnn;
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

echo "<hr>------- Constructor -------------<br>";

class PersonC
{
    private $vname = 'Private';

    public function __construct($vname)
    {
        echo $vname . " " . __METHOD__ . "<br>";
        $this->vname = $vname;
        # $this->vname = setVname($vname);
        # sinnvollerweise würde man hier die setVname-Methode benutzen, um alle Prüfungen und Bearbeitungen durchzuführen
    }
}

$personC = new PersonC('Constructor');
var_dump($personC);

echo "<hr>------- Constructor ohne Variablendeklaration deprecated -------------<br>";
class PersonC1
{
    public function __construct($vname)
    {
        $this->vname = $vname;
    }
}

$personC1 = new PersonC1('Constructor ohne Var');
var_dump($personC1);

echo "<hr>------- Constructor ohne Variablen-Deklaration 2 -------------<br>";
class PersonC2
{
    public function __construct(private String $vname)
    {
        #$this->vname = $vname; # ist so nicht mehr nötig
    }
}

$personC2 = new PersonC2('Constructor ohne Var 2');
var_dump($personC2);

echo "<hr>------- Constructor mit Fehlerbehandlung -------------<br>";

class PersonC3
{
    private $vname = 'Private';

    public function __construct($vname)
    {
        echo $vname . " " . __METHOD__ . "<br>";
        if (empty($vname)) {
            throw new Exception('Vname darf nicht leer sein <br>');
        }
        $this->vname = $vname;
    }
}
try {
    $personC3 = new PersonC3('nicht leer');
} catch (Exception $e) {
    echo $e;
}
var_dump($personC3);

# zerstört das Objekt wieder
unset($personC3); # kein Rückgabewert

echo "<hr>------- Constructor und Destructor / Selbstzerstörung -------------<br>";

class PersonC4
{
    private $vname = 'Private';

    public function __construct($vname)
    {
        echo $vname . " " . __METHOD__ . "<br>";
        $this->vname = $vname;
    }
    public function getVname()
    {
        return $this->vname;
    }
    # -- der Destructor wird ausgeführt wenn das Objekt nicht mehr benutzt wird ...
    public function __destruct()
    {
        echo __METHOD__; # Ausgabe : PersonC4::__destruct
    }
}

$personC4 = new PersonC4('Ich geh kaputt');

var_dump($personC4); # hier wird noch was ausgegeben...
# weil hier gibt es noch eine Verwendung für das Objekt
echo "<br>wie ist mein Name? " . $personC4->getVname() . "<br>";
var_dump($personC4); # keine Ausgabe mehr
# letzte Ausgabe: PersonC4::__destruct

echo "<hr>------- Class mit integrierter Unterklasse / Datentyp ------<br>";

class Kontakt
{
    # Attribute in einzubindenen Klassen müssen public sein
    public $telefon = '000 000';
    public $fax = '00 00';
    function __construct($tel = '', $fax = '')
    {
        $this->telefon = $tel;
        $this->fax = $fax;
    }
}
class PersonK
{
    private $vname = '';
    # in der Oberklasse können die eingebundenen Klassen dann privat gesetzt werden
    private $kontakt = NULL;

    function __construct($vname,  $tel = '000', $fax = '000')
    {
        $this->vname = $vname;
        # erst im Konstruktor kann das Kontakt-Objekt angelegt werden
        $this->kontakt = new Kontakt($tel, $fax);
    }
}

$personK = new PersonK('PersonKa', '0301', '0302');
var_dump($personK);

echo "<hr>------- Übergabe benannter Values ------<br>";
$personK2 = new PersonK('PersonK2', fax: '0300');
var_dump($personK2);

echo "<hr>------- Übergabe eines Objektes (Kontakt) ------<br>";
class PersonK3
{
    public $vname = '';
    public $kontakt = NULL;

    function __construct($vname, Kontakt $kontakt) # Angabe Datentyp Kontakt ist optional - 
    {
        $this->vname = $vname;
        # hier wird ein Objekt Kontakt (s.o.) übergeben
        # Prüfung ob es von Typ Kontakt ist mit "instanceof"
        if ($kontakt instanceof Kontakt) {
            $this->kontakt = $kontakt;
        }
    }
}
$kontakt = new Kontakt('0303', '0304');
$personK3 = new PersonK3('PersonK3', $kontakt);
var_dump($personK3);
var_dump($personK3->kontakt->telefon); # geht so nur mit public kontakt - bei private braucht man einen Getter

# -------- clone($personK3) VORSICHT MIT REFERENZEN !! -----------
echo "<hr>------- clone $personK3  VORSICHT MIT REFERENZEN !! ------<br>";
$personK4 = clone ($personK3);
var_dump($personK4);
$personK4->vname = 'PersonK4';
$personK4->kontakt->fax = '2345';
var_dump($personK4);

# aber alle Referenzen innerhalb des Objektes gehen auf das gleiche Objekt ($kontakt wird also nur referenziert)
# deswegen wird auch in $personK3 die fax-nr geändert
var_dump($personK3);

# und auch $kontakt selbst wird geändert
var_dump($kontakt);

echo "<hr>------- clone mit echtem clone der Referenzen ------<br>";
class PersonK5
{
    public $vname = '';
    public $kontakt = NULL;

    function __construct($vname, Kontakt $kontakt)
    {
        $this->vname = $vname;        
        if ($kontakt instanceof Kontakt) {
            $this->kontakt = $kontakt;
        }
    }
    # hier wird das clonen der enthaltenen Referenz-Objekte definiert
    function __clone(){
        $this->kontakt = clone $this->kontakt;
    }
}
$kontakt = new Kontakt('0333', '0344');
$personK5 = new PersonK5('PersonK5', $kontakt);
var_dump($personK5);

$personK5clone = clone $personK5;
var_dump($personK5clone);
$personK5clone->vname = 'physical PersonK5-Clone';
$personK5clone->kontakt->fax = '222222';
var_dump($personK5clone);
var_dump($personK5);
