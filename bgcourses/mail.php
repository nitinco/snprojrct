<?php
//get data from form  
$name = $_POST['firstname'];
$lname = $_POST['lastname'];
$country = $_POST['country'];
$subject= $_POST['subject'];
$to = "sharmanitin96644@gmail.com";
$subject = "Mail From Nitin";
$txt ="Name = ". $name . "\r\n  Lastname = " . $lname . "\r\n  Country = " . $country."\r\n  Subject = " . $subject;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>