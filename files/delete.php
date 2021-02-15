<?php
$file="../assets/files/tareq1.txt";
    if (file_exists($file)) {
        unlink($file);
        echo "File Deleted";
    }else{
        echo "File not found"; 
    }
?>