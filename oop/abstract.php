<?php

abstract class Car1
{
    public $name;
    public function __construct($name,$model)
    {
        $this->name = $name;
        $this->model = $model;
    }
    abstract public function intro();
}

class Plane1 extends Car1{
    public $userName = "Tareq";
    function name(){
        echo $this->userName;
    }
    public function intro() {
        echo "Car Name $this->name and Model $this->model";
    }
}

$abs = new Plane1("Honda","h-321");
$abs->intro();
echo "<br>";
$abs->name();
?>
