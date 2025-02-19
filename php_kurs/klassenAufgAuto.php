<?php
abstract class Car
{
    public $kennzeichen = '';
    public $fahrgestellnr = '';

    public function __construct($kennzeichen, $fahrgestellnr)
    {
        $this->kennzeichen = $kennzeichen;
        $this->fahrgestellnr = $fahrgestellnr;
    }

    public function getKennzeichen()
    {
        return $this->kennzeichen;
    }

    public function setKennzeichen($kennzeichen)
    {
        $this->kennzeichen = $kennzeichen;
    }

    public function getFahrgestellnr()
    {
        return $this->fahrgestellnr;
    }

    public function setFahrgestellnr($fahrgestellnr)
    {
        $this->fahrgestellnr = $fahrgestellnr;
    }
}
# ----------- PKW -------------------
class PKW extends Car
{
    public $sitzpl = 0;
    public function __construct($kennzeichen, $fahrgestellnr, $sitzpl)
    {
        parent::__construct($kennzeichen, $fahrgestellnr);
        $this->sitzpl = $sitzpl;
    }

    public function getSitzpl()
    {
        return $this->sitzpl;
    }

    public function setSitzpl($sitzpl)
    {
        $this->sitzpl = $sitzpl;
    }
}
# ----------- LKW ---------------------
class LKW extends Car
{
    public $sitzpl = 0;
    public $zuladung = 0;
    public function __construct($kennzeichen, $fahrgestellnr, $sitzpl, $zuladung)
    {
        parent::__construct($kennzeichen, $fahrgestellnr);
        $this->sitzpl = $sitzpl;
        $this->zuladung = $zuladung;
    }

    public function getSitzpl()
    {
        return $this->sitzpl;
    }

    public function setSitzpl($sitzpl)
    {
        $this->sitzpl = $sitzpl;
    }

    public function getZuladung()
    {
        return $this->zuladung;
    }

    public function setZuladung($zuladung)
    {
        $this->zuladung = $zuladung;
    }
}
# ----------- Unternehmen -----------
class Company
{
    public $company = 'NoName';
    public $cars = [];

    function __construct($company)
    {
        $this->company = $company;
    }
    function setCars(Car ...$cars)
    {
        foreach ($cars as $car) {
            $this->cars[] = $car;
        }
    }
    function getCarlist($type = 'alle Fahrzeuge')
    {       
        echo "<hr> ----- Neue Liste für ".$type." ------";
        if ($type == 'alle Fahrzeuge') {
            $cars = $this->cars;
        } else {
            
            foreach($this->cars as $car){
                if($car instanceof $type){
                    $cars[] = $car;
                };
            }
        }

        foreach ($cars as $car) {
            $zuladung = "k.A.";
            if ($car instanceof LKW) {
                $zuladung = $car->zuladung;
            }
            echo "<hr>Kennzeichen : " . $car->kennzeichen . " | Fahrgestellnummer : " . $car->getFahrgestellnr() . " | Sitzplätze : " . $car->getSitzpl() . " | Zuladung : " . $zuladung;
        }
        echo "<hr>";
    }
    function rentCar($car, $person, $time = 1)
    {
        $kennzeichen = $car->getKennzeichen();
        echo $person . " mietet " . $kennzeichen . " für " . $time . " Stunden von der Firma " . $this->company . ".";
    }
}

$vw = new PKW('vw-01-01', '0101', 5);
$kia = new PKW('kia-02-02', '0202', 5);
$iveco = new LKW('iveco-03-03', '0303', 3, 3500);
echo $vw->getFahrgestellnr();

$sixt = new Company('Sixt');
$sixt->setCars($vw, $kia, $iveco);
$sixt->getCarlist();
$sixt->rentCar($vw, 'Ferdinand', 24);

$sixt->getCarlist('PKW');
$sixt->getCarlist('LKW');
