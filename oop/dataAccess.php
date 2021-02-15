<?php

class Car{
    public $userName = "Jack";
    protected $userId= 123654;
    private $userAccount = 695489;
    var $address = "b/61, South Banasree";

    function showProtected(){
        echo $this->userId;
    }

    function showPrivate(){
        echo $this->userAccount;
    }

}

class Sky extends Car{

}

$honda = new Car();
echo $honda->userName ;
echo "</br>";
// echo $honda->userId ;
// echo "</br>";
// echo $honda->userAccount ;
// echo "</br>";
$honda->showProtected();
echo "</br>"; 
$honda->showPrivate();
echo "</br>"; 

$jet = new Sky();
$jet->showProtected();
echo "</br>"; 

?>