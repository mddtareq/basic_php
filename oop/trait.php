<?php
trait message1 {
  public function msg1() {
    echo "trait message 1";
  }
}

trait message2 {
  public function msg2() {
    echo "trait message 2";
  }
}

class Welcome {
  use message1;
  function try(){
      echo "hello";
  }
}

class Welcome2 {
  use message1, message2;
}

$obj = new Welcome();
$obj->msg1();
echo "<br>";
$obj->try();
echo "<br>";
echo "<br>";
$obj2 = new Welcome2();
$obj2->msg1();
echo "<br>";
$obj2->msg2();
?>