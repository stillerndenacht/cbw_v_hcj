<?php
include 'klassenCompPers.php';
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

$compA = new Company('A-Comp');
// $adress1 = new Adress('10055', 'Berlin', 'Wunderlandstrasse');
// $firstwoman = new Person('Alice', 'Wunder', $adress1);
// $compA->setPersons('Firstwoman', 'Firstman');
// $compA->setPersons($firstwoman);
// var_dump($compA);
// var_dump($compA->getPersons());
// var_dump($compA->persons[2]->getAdress());
#$compA->saveseri();

echo "<hr> --- loadseri ---<br>";
#var_dump($compA->loadseri());
var_dump($compA);

echo "<hr> --- load Copy aus txt ---<br>";
$compAcopy = new Company('A-Comp');
var_dump($compAcopy);
