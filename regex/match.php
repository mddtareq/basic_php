<?php
$str = "Mohammad Tareq";
$pattern = "/Tareq/i";
echo preg_match($pattern, $str);
echo "</br>";
$pattern = "/Rafique/i";
echo preg_match($pattern, $str);
?>