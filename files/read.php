<?php
    $file="../assets/files/tareq.txt";
    if(file_exists($file)){
        $handle=fopen($file,'r');
        if($handle){
            $content = fread($handle,filesize($file));
            echo $content;
            fclose($handle);
        }else{
            echo "File not readable";
        }
    }else{
        echo "File not found";
    }
?>