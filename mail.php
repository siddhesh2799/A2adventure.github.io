<?php
//get data from form  

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "bluealienkiller@gmail.com";
$subject = "Mail From website";
$txt ="fname = ". $fname ."\r\nlname =". $lname . "\r\nemail = " . $email . "\r\nmessage =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: ";//dublicate copy of n  enquirey form 
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.php");
?>