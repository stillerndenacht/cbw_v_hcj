<?php
$randomarr = [];
for($i = 0; $i <= 10000; $i++){
    $rand = rand(10000,99999);
    array_push($randomarr,$rand);
}

// print_r($randomarr);
foreach($randomarr as $randzahl) echo " $randzahl ";
echo "<br>";
var_dump(in_array(66666, $randomarr));