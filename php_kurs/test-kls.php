<?php
function funk($a)
{
    echo $a;
}
function Ffunk($a)
{
    echo $a;
}
funk(1);
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 3 </b><br>";
$a = 5;
$b = 12;
$c = 10;
$d = 7;
$e = ($a * $b) + $c * $d / $a;
print($e);
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 4</b> <br>";
$b = false;
if ($b = true)
    var_dump($b);
//   print("true");
else
    print("false");
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 5</b> <br>";
for ($x = 1; $x <= 2; $x++) {
    for ($y = 1; $y <= 3; $y++) {
        if ($x == $y) continue;
        print("x = $x  y =  $y");
    }
}
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 6</b> <br>";
var_dump((bool) 5.8);
echo "<br>";
?>

<?php
echo "<br><b>Aufgabe 7</b> <br>";
$a = array(1, 2, 3);
$b = array(1 => 2, 2 => 3, 0 => 1);
$c = array('a' => 1, 'b' => 2, 'c' => 3);
var_dump($a == $b);
echo "<br>";
var_dump($a === $b);
echo "<br>";
var_dump($a == $c);
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 9</b><br>";
define('FOO', 10);
$array = array(10 => FOO, "FOO" => 20);
print $array[$array[FOO]] * $array["FOO"];
echo "<br>";

?>
<?php
echo "<br><b>Aufgabe 10</b><br>";
$a;
$a = 1;
switch (1) {
    case 1:
        print("Buch Details");
    case 2:
        print("Buchautor");
    default:
        print("Fehlendes Buch");
}
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 11</b><br>";
$x = 0;
$i;
for ($i = 0; $i < 5; $i++) {
    $x += $i;
}
print($x);
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 12</b><br>";
function calc()
{
    $x = 10;
    $b = ++$x;
    print($b);
}
calc();
echo "<br>";
echo "<br><b>Aufgabe 13</b><br>";
var_dump(boolval([]));
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 14</b><br>";
function b($a = 4)
{
    $a = $a / 2;
    return $a;
}
$a = 10;
b($a);
echo $a;
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 15</b><br>";
$staedte = array("HH" => "Hamburg", "HB" => "Bremen", "M" => "München");
foreach ($staedte as $stadt) {
    echo "$stadt <br>";
}
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 16</b><br>";
echo 0x33, ' Vögel sitzen auf ', 022, ' Bäumen.';
echo "<br>";

echo "<br><b>Aufgabe 17</b><br>";
$x  =  123  ==  0123 ;
var_dump($x);
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 21</b><br>";
$sale  =  200;
$sale  =  $sale - +1;
echo  $sale;
echo "<br>";

echo "<br><b>Aufgabe 22</b><br>";
$a = "b";
$b = 20;
echo $$a;
echo "<br>";

echo "<br><b>Aufgabe 23</b><br>";
function increment($val)
{
    $val = $val + 1;
}
$val = 1;
increment($val);
echo $val;
echo "<br>";
?>
<?php
echo "<br><b>Aufgabe 25</b><br>";
$a = 5;
$erg = match ($a) {
    1, 3 => 'ungerade',
    2, 4 => 'gerade',
    default => 'kein gültiger Wert'
};
echo $erg;

echo "<br><b>Aufgabe 26</b><br>";
echo "<br>";
function increment2(&$val)
{
    ++$val;
}
$val = 42;
increment2($val);
echo $val;


?>









