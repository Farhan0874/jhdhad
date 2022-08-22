<?php
$name = $_POST['name'];
$ubject = $_POST['subject'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "therealbbq7@gmail.com";
$subject = "Mail From Realbbq";
$txt = "name = ". $name . "\r\n subject =" . $subject . "\r\n message = " . $message . "\r\n email =" . $email;
$headers = "From: noreply@realbbq.com" . "\r\n" .
"CC: anyone@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:inner-page.html");
?>