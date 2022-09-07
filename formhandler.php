<?php
// visiterdata
$name=$_POST['Name'];
$email=$_POST['Email'];
$sub=$_POST['Subject'];
$massage=$_POST['Massage'];

// webadmine info
$emailfrom='info@technoindia.com';
$Reply='Thank You For reaching out to us. we will look after your Quary and out team will reach to you shortly.';
$body="username:$name.\n"."useremail:$email.\n"."subject:$sub.\n"."massage:$massage.\n";

$to='mahantajoy1234@gmail.com';

$headers = "From:$emailfrom \r\n":
$headers . = "Reply-To:$email \r\n":


mail($to,$Reply,$body,$headers);
header("Location: index.html");
?>