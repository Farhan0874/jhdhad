<?php
$name = $_POST['name'];
$date = $_POST['date'];
$number = $_POST['number'];
$email = $_POST['email'];
$order = $_POST['order'];
$people = $_POST['people'];
$time = $_POST['time'];
$to = "therealbbq7@gmail.com";
$subject = "Mail From Realbbq";
$txt = "name = ". $name . "\r\n date = " . $date . "\r\n number =" . $number . "\r\n order = " . $order . "\r\n email =" . $email . "\r\n time=" . $time . "\r\n people=" . $people;
$headers = "From: Order@realbbq.com" . "\r\n" .
"CC: anyone@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:inner-page.html");
?>