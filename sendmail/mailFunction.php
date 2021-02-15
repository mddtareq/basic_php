<?php

function sendMail()
{
   if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $content = $_POST['content'];
    $header = "From: bdtareqbd32@gmail.com";
    
    if(mail($email, $subject, $content,$header)){
        echo "mail send successfully";
    }
    else{
        echo "mail not send";
    }
}
}
