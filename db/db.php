<?php
$servername = "localhost";
$username = "root";
$password = "";
$database='loginapp';
 $connection = mysqli_connect($servername, $username, $password, $database);       
 if(!$connection) {
 
 echo "Not Connected";
 
 } 



?>