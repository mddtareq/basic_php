<?php
$file = "../assets/files/tareq.txt";
$text = "I love Math ";
if ($file) {
    if (file_exists($file)) {
        $handle = fopen($file, 'r+');
        fread($handle, filesize($file));
        fwrite($handle, $text);
        fclose($handle);
    } else {
        $handle = fopen($file, 'w');
        fwrite($handle, $text);
        fclose($handle);
    }
} else {
    echo "File not Writeable";
}
?>