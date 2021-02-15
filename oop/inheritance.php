<?php

class Car{
    var $name = "Rafique";

    function parameter($name){
        echo $this->name=$name;
    }
}

class Plane extends Car {
    var $name = "Salam";
}

$jet= new Plane();

echo $jet->name;
echo "</br>";
$jet->parameter("tareq");

?>