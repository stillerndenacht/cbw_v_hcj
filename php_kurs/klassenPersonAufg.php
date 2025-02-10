<?php
class Person
{
    private $vname = '';
    private $nname = '';
    private $emails = [];
    private $plz = '';
    private $ort = '';
    private $strasse = '';




    public function getVname()
    {
        return $this->vname;
    }

    public function setVname(String $vname = '')
    {
        $this->vname = $vname;
    }

    public function getNname()
    {
        return $this->nname;
    }

    public function setNname(String $nname)
    {
        $this->nname = $nname;
    }
    # ------------ emails --------
    public function getEmails()
    {
        return $this->emails;
    }

    public function setEmails(...$emails)
    {

        $emaillist = [];

        foreach ($emails as $email) {

            if (!in_array($email, $emaillist)) {
                $emaillist[] = $email;
            }
        }
        sort($emaillist);
        $this->emails = $emaillist;
    }
    # ---------- plz --------------
    public function getPlz()
    {
        return $this->plz;
    }

    public function setPlz($plz)
    {
        $msg = 'PLZ ok';
        $plz = trim((string) $plz);
        if (is_numeric($plz)) {
            if (strlen($plz) < 5) {
                $msg = 'PLZ zu kurz';
            } elseif (strlen($plz) > 5) {
                $msg = 'PLZ zu lang';
            } else {
                $this->plz = $plz;
            }
        } else {
            $msg = 'PLZ darf nur Ziffern enthalten!';
        }

        echo "<hr>".$msg."<hr>";
    }
    # ----------- ort ---------------
    public function getOrt()
    {
        return $this->ort;
    }

    public function setOrt(String $ort)
    {
        $ort = trim($ort);
        $this->ort = $ort;
    }
    # ------------ strasse -----------
    public function getStrasse()
    {
        return $this->strasse;
    }

    public function setStrasse($strasse)
    {
        $strasse = trim($strasse);
        $this->strasse = $strasse;
    }
    # ------------ adresse -------------
    public function getAdress()
    {
        $adress = "$this->vname $this->nname $this->strasse $this->plz $this->ort";
        return $adress;
    }
}

$person1 = new Person;
$person2 = new Person;
$person3 = new Person;

$person1->setVname('Erich');
$person1->setNname('Einser');
$person1->setEmails('ericheinser@emx.ee', 'e.einser@email.ee');
$person1->setPlz("10955");
$person1->setOrt("Berlin");
$person1->setStrasse("Schnellstraße");
echo "<hr>".$person1->getAdress()."<hr>";

var_dump($person1);
