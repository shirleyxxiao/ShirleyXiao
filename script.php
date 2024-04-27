<?php
$to = "shirleyxiaocoop@gmail.com";
$subject = "Thank you for your purchase";

// Headers
$headers = array(
    'MIME-Version' => '1.0',
    'Content-type' => 'text/html;charset=UTF-8',
    'From' => 'shirleyxiaocoop@gmail.com',
    'Reply-To' => 'shirleyxiaocoop@gmail.com'
);

// Name variable (you can set it dynamically based on user input)
$name = "TESTTTTT";

// Include the email template
ob_start();
include("mail-template.php");
$message = ob_get_clean();

// Sending email
$sent = mail($to, $subject, $message, $headers);

// Check if the email was sent successfully
if(!$sent) {
    echo "Error: Message not sent. Please try again";
} else {
    echo "Message was sent successfully";
}
?>
