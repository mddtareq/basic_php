<?php

class Car{

    var $wheel =4;
    var $engine = "new";
    var $name = "Rafique";

    function MoveWheels(){
        $this->wheel=5;
        echo "Move";
    }
    function parameter($name){
        echo $this->name=$name;
    }
}

$toyota = new Car();
$honda = new Car();

echo  $toyota->wheel;
echo "</br>";
echo  $toyota->wheel;
echo "</br>";
echo  $toyota->name;
echo "</br>";
$toyota->parameter("tareq");
echo "</br>";
echo  $toyota->name;

?>