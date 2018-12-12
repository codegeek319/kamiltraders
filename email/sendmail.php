<?php

$name = $_POST['txtname'];
$email = $_POST['txtemail'];
$msg = $_POST['txtmsg'];

$to = "gk199680@gmail.com";
$subject = "Business Issue";
$message = "Hello! <br /><br />"."Name: ".$name."<br /><br />Email: ".$email."<br /><br />Gender: ""<br /><br />Message: ".$msg."<br /><br />Regards<br />Usman aziz";
$headers  = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n"; 
mail($to,$subject,$message,$headers);
echo "The email has been sent.";
?> 