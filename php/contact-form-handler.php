<?php
    $name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'contact@shotbybirk.com';

$email_subject = "New Email";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n";

$to = "brandonbirk1995@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>
