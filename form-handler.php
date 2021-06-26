<?php
$name = = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.n\".
                "User Email: $visitor_mail.n\".
                "User message: $message.n\";

$to = 'receive.ckstech@gmail.com';

$headers = "From: $email_from \r\n";

$ headers = Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_message,$headers);

header("Location: contactus.html");
?>