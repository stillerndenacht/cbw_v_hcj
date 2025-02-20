<?php
class Magic
{
    public $pub = 'public Attr';
    protected $prot = 'protected Attr';
    private $priv = 'private Attr';
    public $unserial = 'undone';
    # ------------------------------------------------
    public function __construct()
    {
        echo 'automatisch beim Instanzieren : (' . __METHOD__ . ')<br>';
    }
    # ------------------------------------------------
    public function __destruct()
    {
        echo '<hr>Zerstört( bei unset, null, Ende) das Objekt : (' . __METHOD__ . ')<br>';
    }
    # ------------------------------------------------
    public function __get($name)
    {
        echo 'Lesender Zugriff auf nicht existierendes Attribut : (' . $name . ') da hilft : (' . __METHOD__ . ')<br>';
        # das funktioniert auch für Attribute auf die man nicht zugreifen darf
        return $this->$name;
    }
    # ------------------------------------------------
    public function __set($name, $value)
    { 
        # -- meldet fehlerhaften Zugriff und verhindert versehentliches Anlegen/Überschreiben (ggf. auskommentieren)
        echo 'Sie haben das nicht existierende/ erreichbare Attribut : (' . $name . ') mit dem Wert : (' . $value . ') versucht anzulegen/  zu überschreiben (' . __METHOD__ . ')<br>';
    }
    # ------------------------------------------------
    private function nichterreichbar() {}

    public function __call($name, $values)
    {
        echo 'der Versuch (' . $name . ') mit den Values (' . $values . ') aufzurufen ist gescheitert - sie ist nicht da oder geschützt: (' . __METHOD__ . ')<br>';
    }
    # ------------------------------------------------
    public function __invoke(...$values)
    {
        foreach ($values as $value) {
            echo 'Value :  (' . $value . ') an  (' . __METHOD__ . ') übergeben <br>';
        }
    }
    # ------------------------------------------------
    public function __toString()
    {
        echo 'Liefert eine String-Ausgabe auf echo $obj die man hier definieren kann : (' . __METHOD__ . ')<br>';

        return (string) $this->priv . " : " . $this->prot;
    }
    # ------------------------------------------------
    public function __sleep()
    {
        echo 'wird beim serialisieren benutzt : (' . __METHOD__ . ')<br>';
        # was bei serialize($obj) eigentlich serializiert werden soll gibt man im return als Array an
        return array('priv', 'prot', 'pub');
    }
    # ------------------------------------------------
    public function __wakeup()
    {
        echo 'wird beim unserialisieren benutzt : (' . __METHOD__ . ')<br>';

        # man kann Werte-Anpassungen für nicht serialisierte Werte angeben
        $this->unserial = 'done';
    }
}

$obj = new Magic();

# --- für __get ---------------
echo '<hr>---- __get meldet wenn etwas nicht da oder erreichbar ist -----<hr>';
echo $obj->gibtsnicht;
echo $obj->priv;

# --- php legt Attribute einfach an, wenn sie nicht existieren, aber gesetzt werden (dafür __set oben auskommentieren)
echo '<hr> __set meldet, wenn ein Attribut nicht da / erreichbar ist, aber angelegt / überschrieben werden soll<hr>';
$obj->newset = 'neu gesetzt';
echo $obj->newset;
$obj->priv = 'privat geändert';
var_dump($obj);

# -- __call ---------------------
echo '<hr> __call meldet, wenn eine Funktion nicht da / erreichbar ist <hr>';
$obj->nichterreichbar('not ', 'for ', 'you');

# --- __invoke ------------------
echo '<hr>---- __invoke gibt die Möglichkeit $obj als Funktionen zu behandeln -----<hr>';
# die Values landen in __invoke
$obj(1, 2, 3);

# --- __toString ----------------
echo '<hr>---- __toString gibt die Möglichkeit $obj als String auszugeben -----<hr>';
echo $obj;

# --- __sleep / __wakeup --------
echo '<hr>---- __sleep / __wakeup für serialize / unserialize-----<hr>';
$seri = serialize($obj);
$unseri = unserialize($seri);
var_dump($unseri);

echo '<hr>---- Ende des Scripts -----<hr>';
