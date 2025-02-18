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
}

class PKW extends Car
{
    public $sitzpl = 0;
    public function __construct($kennzeichen, $fahrgestellnr, $sitzpl)
    {
        parent::__construct($kennzeichen, $fahrgestellnr);
        $this->sitzpl = $sitzpl;
    }
}

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
}
