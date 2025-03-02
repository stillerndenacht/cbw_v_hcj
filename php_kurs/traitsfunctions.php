<?php
echo "-- Integration von Funktionen aus Traits mit mehreren Traits --";
trait TTest
{
    public function ttest($t)
    {
        echo "TTest: " . $t . "<br>";
    }
}

trait Test
{
    use TTest;
    public function test($t)
    {
        echo "Test: " . $t . "<br>";
        echo "<hr>";
        $this->ttest($t);
        echo "<hr>";
    }
}

class TestCheck
{
    use TTest;
    use Test;

    public function testcheck($t)
    {
        echo $t."<br>";
        $this->ttest($t);
        $this->test($t);
    }
}

class Execute extends TestCheck {}

$executor = new Execute();
$executor->testcheck("execute");

$testcheck = new TestCheck();
$testcheck->testcheck("testcheck");
$testcheck->testcheck("test aus trait");

# ---------------------------------------------------------
echo "-- Integration von Funktionen aus einem Trait --";

trait TTest2
{
    public function ttest2($t2)
    {
        echo "TTest2: " . $t2 . "<br>";
    }

    public function test2($t2)
    {
        echo "Test2: " . $t2 . "<br>";
        echo "<hr>";
        $this->ttest2($t2);
        echo "<hr>";
    }
}

class TestCheck2
{
    use TTest2;    

    public function testcheck2($t2)
    {
        echo $t2."<br>";
        $this->ttest2($t2);
        $this->test2($t2);
    }
}

class Execute2 extends TestCheck2 {}

$executor2 = new Execute2();
$executor2->testcheck2("execute2");

$testcheck2 = new TestCheck2();
$testcheck2->testcheck2("testcheck2");
$testcheck2->testcheck2("test2 aus trait");