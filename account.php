<?php
$name = $_POST['name'];
$email = $_POST['password'];
$phone = $_POST['email'];
$formcontent="From: $name \n $password \n $email";
$recipient = "webmaster@invinoveritas.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='form.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>