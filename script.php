<?php

$to = "shirleyxiaocoop@gmail.com"
$subject = "message from shirleyxiao.co"

//array headers

$headers array(
    "MIME-Version" => "1.0",
    "Content-Type" => "text/html;charset=UTF-8",
    "From" => "shirleyxiaocoop@gmail.com", //should be the user email
    "Reply-To" => "shirleyxiaocoop@gmail.com"
)

//will get data from the message box in GetInTouch.html page
$message = file_get_contents("mail-template.php")