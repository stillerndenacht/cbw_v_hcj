<?php
# kleiner Text für die erzeugte serial.txt
file_put_contents('files/serial.txt', "--- neuer Durchlauf erzeugt aus der serialisieren.php ----".PHP_EOL, FILE_APPEND);

$var1 = 1;
$var2 = true;
$var3 = false; # landet als nix/leer in der txt
$arr = [1, "2","drei"];
$obj = new DateTime();
$var4 = "ende";
file_put_contents('files/serial.txt', $var1.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $var2.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $var3.PHP_EOL, FILE_APPEND);
# file_put_contents('files/serial.txt', $arr.PHP_EOL, FILE_APPEND); 
# geht nicht als String abzulegen
# file_put_contents('files/serial.txt', $obj.PHP_EOL, FILE_APPEND); 
# geht nicht als String abzulegen
file_put_contents('files/serial.txt', $var4.PHP_EOL, FILE_APPEND);
# der Datentyp geht aber beim Speichern in eine txt verloren - boolsche Variablen werden als 1 oder nix abgelegt

#deswegen gibt es die function serialize() welche den Datentyp mit in den value speichert

$serialvar1 = serialize($var1);
$serialvar2 = serialize($var2);
$serialvar3 = serialize($var3);
$serialarr = serialize($arr);
$serialobj = serialize($obj);
$serialvar4 = serialize($var4);


var_dump($serialvar1);
var_dump($serialvar2);
var_dump($serialvar3);
var_dump($serialarr);
var_dump($serialobj);
var_dump($serialvar4);

# diesen serialized value kann man ohne Typ-Verlust in txt-Dateien(oder anderen String-Dateien) ablegen

file_put_contents('files/serial.txt', $serialvar1.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $serialvar2.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $serialvar3.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $serialarr.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $serialobj.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $serialvar4.PHP_EOL, FILE_APPEND);

# was man serializen kann, das kann man auch unserializen mit unserialize()

$unserialvar1 = unserialize($serialvar1);
$unserialvar2 = unserialize($serialvar2);
$unserialvar3 = unserialize($serialvar3);
$unserialarr = unserialize($serialarr);
$unserialobj = unserialize($serialobj);
$unserialvar4 = unserialize($serialvar4);

var_dump($unserialvar1);
var_dump($unserialvar2);
var_dump($unserialvar3);
var_dump($unserialarr);
var_dump($unserialobj);
var_dump($unserialvar4);

file_put_contents('files/serial.txt', $unserialvar1.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $unserialvar2.PHP_EOL, FILE_APPEND);
file_put_contents('files/serial.txt', $unserialvar3.PHP_EOL, FILE_APPEND);
# file_put_contents('files/serial.txt', $unserialarr.PHP_EOL, FILE_APPEND); # geht nicht als String abzulegen
# file_put_contents('files/serial.txt', $unserialobj.PHP_EOL, FILE_APPEND); # geht nicht als String abzulegen
file_put_contents('files/serial.txt', $unserialvar4.PHP_EOL, FILE_APPEND);