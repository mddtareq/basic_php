<?php
$input = [
  "Red",
  "Pink",
  "Green",
  "Blue",
  "Purple"
];

$result = preg_grep("/^p/i", $input);
print_r($result);
echo "</br>";
$result=preg_grep ('/e(\w+)/', $input );
print_r($result);
?>