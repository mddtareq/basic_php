<?php

class Car{
    
    static $id=420;

    static function staticMethod() {
        Car::$id =421;
        echo "Hello World!";
    }

}

// $honda = new Car();
echo Car::$id ;
echo "</br>";
Car::staticMethod();
echo "</br>";
echo Car::$id ;
echo "</br>";


?>