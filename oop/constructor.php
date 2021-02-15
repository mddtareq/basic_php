<?php


class Plane  {
    function __construct($name){
        $this->name=$name;
    }
    function get() {
        return $this->name;
      }
}

$jet= new Plane("Tareq");

echo $jet->get();


?>