<?php
#namespace MyFramework\DB;
class C
{
    public $x = 1;
    function __construct()
    {
        ++$this->x;
    }
    function __invoke()
    {
        return ++$this->x;
    }
    function __toString()
    {
        return (string) --$this->x;
    }
}
$obj = new C();
echo $obj();

#-------------------
echo "<hr>";

class MyClass
{
    static function myName()
    {
        return __METHOD__;
    }
}

print MyClass::myName();

#-------------------
echo "<hr>";

class Autor
{
    protected $name = 'DragomirCM';

    public function getName()
    {
        return $this->name;
    }
}
class Buch
{
    protected $titel = 'I was reincarnated as a Magic Academy';
    protected $autor;
    public function __construct()
    {
        $this->autor = new Autor();
    }
    public function getTitel()
    {
        return $this->titel;
    }
    public function getAutorName()
    {
        return $this->autor->getName();
    }
}

$buch = new Buch();
$buch->getAutorName();

#-------------------
echo "<hr>";

class MeinDateTime extends DateTime
{
    public function deutschesDatum()
    {
        #var_dump($this);
        echo "<br>-----<br>";
        $date = $this->format("d.m.Y");
        #$date = (new DateTime($d))->format("d.m.Y");
        return $date;
    }
}
$deDate = new MeinDateTime('@1740133322');

$d = time();
var_dump($d);
#var_dump($deDate->deutschesDatum());
echo $deDate->deutschesDatum();

#-------------------
echo "<hr>";
// $date = new DateTime();
// var_dump($date);
#-------------------
echo "<hr>";

abstract class Graphics {
    abstract function draw($im, $col);
}
abstract class Point1 extends Graphics {
    public $x, $y;
    
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    function draw($im, $col) {
        ImageSetPixel($im, $this->x, $this->y, $col);
    }
}     
class Point2 extends Point1 { }
abstract class Point3 extends Point2 { }

$point = new Point2(1,2);

#-------------------
echo "<hr>";

class T {
    const A = 42 + 1;
 }
 #echo A;
 
#-------------------
echo "<hr>";

class a {
    public $val;
 }     
 function renderVal(a $a) {
   if ($a) {
     echo $a->val;
   } 
 }    
 #renderVal(null);

 #-------------------
echo "<hr>";

class Test {
    public $var = 1;
 }
 function addMe(Test $t) {
   $t->var++;
 }
 $t = new Test();
 addMe($t);
 echo $t->var;
 
 