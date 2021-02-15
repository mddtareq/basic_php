<?php
interface Animal {
  public function makeSound();
}

class Check{
    var $name = "Tareq";
    function name(){
        echo $this->name;
    }
}

class Cat extends Check implements Animal {
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
echo "<br>";
$animal->name();
?>