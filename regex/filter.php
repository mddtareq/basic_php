<?php
$input = [
  "It's around 5",
  "26 hours",
  "Tareq",
  "In the year 1996"
];
print_r($input);
echo "</br>";
$result = preg_filter('/[0-9]+/', '($0)', $input);
print_r($input);
echo "</br>";
print_r($result);
?>