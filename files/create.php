<?php
    $file="../assets/files/tareq1.txt";
    if (file_exists($file)) {
        echo "File already exist";
    }else{
        $handle=fopen($file,'w');
        fclose($handle); 
        echo "File created"; 
    }
?>