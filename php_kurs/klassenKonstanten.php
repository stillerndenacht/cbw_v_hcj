<?php
# ------- globale Konstanten definieren
const KONSTANZE = 1;
define('KONSTANTIN', 2);

# ------ Konstanten dürfen keine variablen Werte haben
$var = 10;
# const KONSTAT = $var; 
# das geht nicht, weil dann wär es nicht mehr konstant

class Test
{
    #----- Klassenkonstanten
    const TESTKONST = 10; # Klassenkonstante
    private const PRIVATETEST = 111; # Funktioniert nur innerhalb der Klasse
    final const FINAL = 'Final';

    # ---- Klassenvariable
    public static $staticVar = 66; # Klassenattribut ist in allen Objekten der Klasse enthalten und kann zentral geändert werden s.u.

    function test()
    {
        echo "<hr>----- Ausgabe der globalen Konstante in function<br>";
        # ----- Ausgabe der globalen Konstante
        echo KONSTANZE."<br>"; 

        # echo TESTKONST; # geht nicht
        # echo $this->TESTKONST; # geht auch nicht

        echo "<hr>---- Ausgabe der Klassenkonstante in function<br>";
        # ---- Ausgabe der Klassenkonstante
        echo Test::TESTKONST."<br>";      
        echo TEST::PRIVATETEST."<br>";

        echo "<hr>---- Ausgabe der Klassenvariable in function<br>";
        # ---- Ausgabe der Klassenvariable
        echo Test::$staticVar;
    }
}

$obj = new Test();
# echo TESTKONST; # geht nicht
# echo $obj->TESTKONST; geht nicht

echo "<hr>---- Ausgabe der Klassenkonstante<br>";
# ---- Ausgabe der Klassenkonstante
echo Test::TESTKONST."<br>";
echo $obj::TESTKONST."<br>";

echo "<hr>---- Ausgabe und Änderung der Klassenvariable<br>";
# ---- Ausgabe und Änderung der Klassenvariable
echo Test::$staticVar."<br>";
Test::$staticVar = 55; # Änderung des Klassenattributs
echo Test::$staticVar."<br>";
echo $obj::$staticVar."<br>";

echo "<hr>--- private Konstanten sind außerhalb des Objektes nur über functions zugänglich<br>";
# --- private Konstanten sind außerhalb des Objektes nur über functions zugänglich
# echo TEST::PRIVATETEST;
# echo $obj::PRIVATETEST;
$obj->test();