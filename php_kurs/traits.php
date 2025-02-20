<?php
# um Methoden oder Attribute als Block in Klassen einzubinden kann man sie entweder als static Klassenmethoden realisieren und dann mit Klasse::methode() aufrufen
# oder man kann sie als Traits definieren und diese via 'use Trait;' einbinden s.u.

echo "<hr> --- Konstruktion mit static functions -- <br>";

class Datum
{
    public static function getDatum()
    {
        return date('d.m.Y');
    }
}

class Zeit
{
    public static function getZeit()
    {
        return date('H:i:s');
    }
}

class DatumZeit
{
    public function getDatumZeit()
    {
        return Datum::getDatum() . " " . Zeit::getZeit();
    }
}

$obj = new DatumZeit();
echo $obj->getDatumZeit();

echo "<hr> --- und jetzt mit traits -- <br>";

# ------- so funktioniert das mit Traits ----------

trait TraitDatum
{
    public $traitpub = 'public Attr';
    protected $traitprot = 'protected Attr';
    private $traitpriv = 'private Attr';

    public function getDatum()
    {
        return date('d.m.Y');
    }
    public function getInfo()
    {
        echo "getInfo aus : " . __TRAIT__ . "<br>";
    }
}

trait TraitZeit
{
    public function getZeit()
    {
        return date('H:i:s');
    }
    # gleiche Methoden führen zu Fehlern
    // public function getInfo(){
    //     echo "getInfo aus : ".__TRAIT__."<br>";
    // }
}
trait TraitInfo
{
    private function getInfo()
    {
        echo "getInfo aus : " . __TRAIT__ . "<br>";
    }
}

# die mit use eingebundenen traits werden wie ganz normale Methoden behandelt
class DatumZeitofTraits
{
    use TraitDatum, TraitZeit;
    public function getDatumZeit()
    {
        return $this->getDatum() . " " . $this->getZeit();
    }
    public function getAttr()
    {
        echo $this->traitpub . "<br>";
        echo $this->traitprot . "<br>";
        echo $this->traitpriv . "<br>";
    }
    public function getInfo()
    {
        echo "getInfo aus : " . __CLASS__ . "<br>";
    }
}
# ------- Kollisionen vermeiden --------
# dafür kann definieren, welche von doppelten Funktionen benutzt wird
# oder/und kann Funktionen mit alias verwenden
# und man kann sogar die Sichtbarkeit anpassen
class GetInfoofTraits
{
    use TraitDatum, TraitInfo {
        TraitDatum::getInfo insteadof TraitInfo;

        # -- in Einzelschritten alias
        # TraitInfo::getInfo as public; 
        # TraitInfo::getInfo as infogetInfo;

        # -- oder kombiniert
        TraitInfo::getInfo as public infogetInfo;
        # bei mehrfacher aliasierung gilt das Letzte

    }
}

$objwithTrait = new DatumZeitofTraits();
echo $objwithTrait->getDatumZeit();
echo "<hr>";

var_dump($objwithTrait);

echo "<hr> --- Ausgabe von außerhalb der class nur für public -- <br>";
echo $objwithTrait->traitpub . "<br>";

# echo $objwithTrait->traitprot."<br>";
# echo $objwithTrait->traitpriv."<br>";

echo "<hr> --- Ausgabe über function in der class für alles -- <br>";
$objwithTrait->getAttr();
$objwithTrait->getInfo();

echo "<hr> --- Vermeiden von Kollisionen -- <br>";
$objgetInfo = new GetInfoofTraits();
$objgetInfo->getInfo();
$objgetInfo->infogetInfo();

# -------- Klassen Vererbung und Traits -----

class Base {
    public function say(){
        echo "Base<br>";
    }
}
trait TraitoverBase{
    public function say(){
        echo "Trait over Base<br>";
    }
}
class Floor extends Base{
    use TraitoverBase;
}

echo "<hr> --- Klassen Vererbung und Traits -- <br>";
$floor = new Floor();
$floor->say();

# sinnvollerweise lagert man traits in einen Ordner traits aus als traitname.trait.php
# und man kann sie genauso mit einem Autoloader behandeln wie interfaces und classes