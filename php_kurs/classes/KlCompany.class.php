<?php

class Company
{
    private $company = '';
    public $persons = [];
    function __construct($company)
    {
        $this->company = $company;
        $this->loadseri();
    }

    public function getPersons()
    {
        return $this->persons;
    }

    public function setPersons(...$persons)
    {
        foreach ($persons as $person) {
            $this->persons[] = $person;
        }
        $this->saveseri();
    }
    private function saveseri()
    {
        $saveseri = serialize($this);
        file_put_contents('files/' . $this->company . '.txt', $saveseri);
    }
    private function loadseri()
    {
        if (file_exists('files/' . $this->company . '.txt')) {
            $loadseri = unserialize(file_get_contents('files/' . $this->company . '.txt'));
            $this->persons = $loadseri->persons ?? [];
            #return $loadseri;
        }
    }
}


