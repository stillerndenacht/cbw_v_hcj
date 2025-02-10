<?php
function test(...$parameters){};

$f = function () {
    return "hello";
}; 
echo gettype($f);

$count = strlen('$1ï¿½2');
echo $count;

// $getdata = "foo=bar";
// $opts = array('http' => array( 
//                         'method' => 'POST', 
//                         'header' => 'Content-type: application/x-www-form-urlencoded', 
//                         'content' => $getdata 
// 		) 
//               );
// $context = stream_context_create($opts); 
// $result = file_get_contents('http://example.com/submit.php', false, $context);

$date1 = new DateTime('2014-02-03');
$date2 = new DateTime('2014-03-02');
 var_dump($date2 < $date1);
// var_dump($date1->diff($date2) < 0);