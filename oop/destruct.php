<?php


class Plane  {
    public $name;
    function __construct($name){
        $this->name=$name;
    }

    function __destruct(){
        echo "The name is {$this->name}.";
    }
}

$jet= new Plane("Tareq");



?>