<?php 
$a = array('_!', 'def', 0);
$b = sort($a);
var_dump($b);
var_dump($a);
print($b);

#$datetime = time();
#$datetime->format('Y-m-d H:i:s');
#$datetime->format('%Y-%m-%d %h:%i:%s');
#$date = date('Y-m-d H:i:s', $datetime);
##echo $datetime;

#echo pathinfo()

$pieces = explode("/", "///");
var_dump($pieces);

echo "<hr>";
#echo file_get_contents("test.php");
echo strpos("me myself and I", "m", 2);

echo "<hr>";
try { 
    class MyException extends Exception {}; 
    try {
      throw new MyException; 
    } 
    catch (Exception $e) { 
      echo "1:";
      throw $e; 
    } 
    catch (MyException $e) { 
      echo "2:";
      throw $e; 
    } 
  } 
  catch (Exception $e) {
     echo get_class($e); 
  }
  

  $date = new DateTime();
  $date = new DateTime('@' . time());
  $date = new DateTime(time());
 var_dump($date);