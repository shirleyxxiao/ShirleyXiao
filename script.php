<?php

$to = "shirleyxiaocoop@gmail.com";
$subject = "message from shirleyxiao.co";

// array headers
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html;" . "\r\n";
$headers .= "From: shirleyxiaocoop@gmail.com" . "\r\n"; // should be the user email
$headers .= "Reply-To: shirleyxiaocoop@gmail.com" . "\r\n";

// will get data from the message box in GetInTouch.html page
$message = file_get_contents("mail-template.php");

$send = mail($to, $subject, $message, $headers);

// checking if email sent
echo ($send ? "Mail has successfully sent" : "Error!");
?>
