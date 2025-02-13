<?php
include_once 'includes/klCompInit.inc.php';

$compA = new Company('A-CompInc');
$adress1 = new Adress('10055', 'Berlin', 'Wunderlandstrasse');
$firstwoman = new Person('Alice', 'Wunder', $adress1);
$compA->setPersons($firstwoman);

// $compA->setPersons('Firstwoman', 'Firstman');

// var_dump($compA);
// var_dump($compA->getPersons());
// var_dump($compA->persons[2]->getAdress());
#$compA->saveseri();

echo "<hr> --- loadseri ---<br>";
#var_dump($compA->loadseri());
var_dump($compA);

echo "<hr> --- load Copy aus txt ---<br>";
$compAcopy = new Company('A-CompInc');
var_dump($compAcopy);