<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'fake@fakeemail.com';

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                "User Email: $vistor_email.\n".
                    "User Subject: $subject.\n".
                        "User Message: $message . \n";

$to = 'fake@fakeemail.com';

$headers = "From: $email_from \r\n"

$headers .= "Reply- To: $vistor_email \r\n"

mail($to,$email_subject.$email_body,$headers);

header("Location: contact.html")



?>