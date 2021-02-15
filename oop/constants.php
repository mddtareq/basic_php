<?php
class Welcome {
  const HELLO = "Welcome Brother!";
  public function checkIn() {
    echo self::HELLO;
  }
}

$check = new Welcome();
$check->checkIn();
?>