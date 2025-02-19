<?php
class One {
    public static function classname(){
        return __CLASS__;
    }
    public static function starten(){
        return self::classname()." startet.";
    }
# durch Schlüssel static wird für die function der Zeiger erst bei Ausführung gesetzt
    public static function startenLate(){
        return static::classname()." startet mit Late Static Binding";
    }
}

class OneTwo extends One {
    // public static function classname(){
    //     return __CLASS__;
    // }
}

# wenn die Methoden überschrieben werden gibt es kein Problem
echo One::classname()."<br>";
echo OneTwo::classname()."<br>";

# wenn aber die Methode nicht überschrieben wird bleibt der Zeiger auf die Parent-Class
echo One::starten()."<br>";
echo OneTwo::starten()."<br>";

# besser mit Late Static Binding
echo One::startenLate()."<br>";
echo OneTwo::startenLate()."<br>";