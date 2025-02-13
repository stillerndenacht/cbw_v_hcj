<?php
class Adress {
    private $plz = '';
    private $ort = '';
    private $strasse = '';

function __construct($plz = '', $ort='',$strasse='')
{
    $this->setPlz($plz);
    $this->setOrt($ort);
    $this->setStrasse($strasse);
}

    # ---- prüfung String plz ---
    private function str_isof_int($string)
    {
        $notok = '';
        $strarr = str_split($string);
        $check = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];
        
        foreach ($strarr as $a) {
            var_dump($a);
            echo $a;
            if (!in_array($a, $check)) {
                $notok = 'notok';
            }
        }
        if ($notok == 'notok') {
            return false;
        } else {
            return true;
        }
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
        if ($this->str_isof_int($plz)) {
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

        echo "<hr>" . $msg . "<hr>";
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
    
}