<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
echo "</br>";
?>
<?php
$json = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($json));
?>