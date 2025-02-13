<?php



include 'includes/klassen_3.inc.php';


$firma = new Unternehmen('CBW');

$zufall = rand(100000,999999);

$firma->neuePerson(new Person('Name_'. $zufall, new Anschrift('11111', 'Ort_' . $zufall, 'Straße_'. $zufall)));

header('Location: klassen_3.php');
die;
