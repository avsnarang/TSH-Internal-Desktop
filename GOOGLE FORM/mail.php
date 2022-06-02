<?php
//get data from form  
$question = $_POST['answer'];
$mcq= $_POST['gender'];
$checkbox= $_POST['gender1'];
$dropdown= $_POST['drop'];


$to = "admin@tsh.edu.in";
$subject = "test mail";
$txt ="answer = ". $question . "\r\n  gender = " . $mcq . "\r\n gender1 =" . $checkbox . "\r\n drop=" .$dropdown;
$headers = "From: a.deepakkumar@thescholarshome.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>