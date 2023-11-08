<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['career'];
$message = $_POST[]'message';

$email_from = 'moshoadibamle@gmail.com';

$email_subject = 'New Message';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                  "User Message: $message.\n".;

$to = '217124089@edu.vut.ac.za';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>