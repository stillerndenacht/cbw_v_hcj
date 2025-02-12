<?php
include 'klassenCompAdr.php';
include 'klassenCompComp.php';


class Person
{
    private $vname = '';
    private $nname = '';
    private $emails = [];
    
    private $adress;

function __construct($vname, $nname = '', Adress $adress)
{
    $this->vname = $vname;
    $this->nname = $nname;
    $this->adress = $adress;
}


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
    
    # ------------ adresse -------------
    public function setAdress(Adress $adress)
    {
        $this->adress = $adress;
    }

    public function getAdress()
    {
        #ar_dump($this->adress->getStrasse());
        $adress = "$this->vname $this->nname {$this->adress->getStrasse()}";
        
        return $adress;
    }

    
    
}


