<?php  
    $str= "Tareq";  
    $str1= base64_encode($str);  
    echo $str1;  
    echo "</br>";
    $str1= base64_decode($str1);  
    echo $str1; 
?>  