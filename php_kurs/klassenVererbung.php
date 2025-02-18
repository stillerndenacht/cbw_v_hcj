<?php
echo "<hr> ----- Klassen und Vererbung ----- <hr>";

class Produkt
{
    public $name = 'unknown Product';
    public $preis = 0.;

    public function __construct($name, $preis)
    {
        $this->name = $name;
        $this->preis = $preis;
    }
    public function ichBin()
    {
        echo "ich bin in Produkt<br>";
    }
}

class Buch extends Produkt
{
    public $author = 'unknown author';
    public $seiten = 0;
}

class EBook extends Buch
{
    public $downloadUrl = '';
}

class CD extends Produkt
{
    public $band = '';

    # -- Constructoren kann man erweitern ----
    function __construct($name, $preis, $band)
    {
        $this->name = $name;
        $this->preis = $preis;
        $this->band = $band;
    }
    # -- einfacher ist es so ...
    // public function __construct($name, $preis, $band)
    // {
    //     parent::__construct($name, $preis);
    //     $this->band = $band;
    // }
    # --- functions kann man nicht erweitern ---
    // function ichBin($test){
    //     echo "ich bin eine CD<br>";
    // }

    # aber man kann in functions parent-functions aufrufen
    # deswegen kann man den Constructor vereinfachen ... siehe oben
    public function ichBin()
    {
        parent::ichBin(); # ruft die Parent-function auf
        echo "ich bin in CD<br>";
        echo "Name der Band : " . $this->band;
    }
}

#--------------

# $obj = new EBook();
# var_dump($obj instanceof Buch);

function test(Buch $x)
{
    echo 'ist von passendem Typ';
    echo $x->author . "<br>";
    echo $x->name . "<br>";
}
# test($obj);
$obj2 = new CD('CD', 10, 'Programmers Hell');

# $obj2->ichBin();
$obj2->ichBin();

# -------------------------------------------------------
echo "<hr> ----- private/protected/const ----- <hr>";

class Super
{
    public $attr1 = 'Wert 1';
    protected $protected = 'protected Wert';
    private $private = 'private Wert';
    const KONSTANTE = 'KonstanteSuper';
    final const FINALKONST = 'KonstanteFinal';


    private function callprivate()
    {
        echo $this->private . " aus der callprivate<br>";
        echo $this->protected . " aus der callprivate<br>";
    }

    protected function callprotect()
    {
        echo $this->private . " aus der callprotected<br>";
        echo $this->protected . " aus der callprotected<br>";
    }
    function call()
    {
        echo $this->private . "<br>";
        echo $this->protected . "<br>";
        echo "<hr>";

        $this->callprotect();
        $this->callprivate();
    }
}

class Sub extends Super
{
    # private Attribute von Super kann man in Sub nicht aufrufen
    # protected Attribute sind innerhalb der Vererbung aufrufbar

    # geerbte const kann man überschreiben
    const KONSTANTE = 'KonstanteSub';

    # final const lassen sich nicht überschreiben
    #final const FINALKONST = 'KonstanteSub';

    function call()
    {
        # echo $this->private. "<br>";
        echo $this->protected . "<br>";
        echo "<hr>";

        # protected functions kann man innerhalb der Klassen der Vererbung (abwärts) aufrufen
        $this->callprotect();

        # private functions kann man nur aus der eigenen Klasse aufrufen
        # $this->callprivate();
    }
}

$superobj = new Super();
$subobj = new Sub();

$superobj->call();
$subobj->call();

# protected functions kann man nur innerhalb der Klassen aufrufen
// $superobj->callprotect();
// $subobj->callprotect();

# private functions kann man nur innerhalb der Klassen aufrufen
# $superobj->callprivate();

# -----------------------------------------------------------------
echo "<hr> ----- Abstracte Klassen ----- <hr>";
abstract class General
{
    public $name = 'Abstract';

    # generell notwendige functions kann man abstract definieren
    abstract function call();

    function call2()
    {
        echo $this->name . "aus der call2 in General<br>";
    }
}

class Concrete extends General
{
    public $concrete = 'Concrete';
    # die geerbte function muss noch konkretisiert werden
    function call()
    {
        echo $this->name . "<br>";
        echo $this->concrete . "<br>";
    }
}

# Abstrakte Klassen kann man nicht zum Objekt initialisieren
# $general = new General();
$concrete = new Concrete();

echo $concrete->name;
echo $concrete->concrete;
$concrete->call();
$concrete->call2();

# ----------------------------------------
echo "<hr> ----- final Klassen ----- <hr>";
final class FinalClass
{
    public $final = 'hier darfst du nix ändern';
    public function finalfunc()
    {
        echo $this->final . "<br>";
    }
}

# final class kann man nicht beerben
// class notPossible extends FinalClass{
//     bla bla
// }

# final class kann man nur instanziieren

$finalobj = new FinalClass();
$finalobj->finalfunc();