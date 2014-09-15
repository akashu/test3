<?php
$to = "asu9986@gmail.com";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
$from = "alohasscdev@gmail.com";
mail($to,$subject,$message,"From: $from");
echo "The email has been sent.";
?> 
