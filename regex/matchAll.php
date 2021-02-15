<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
if(preg_match_all($pattern, $str, $matches)) {
  print_r($matches);
}
?>