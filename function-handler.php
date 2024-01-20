<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$Message = $_POST['msg'];
$file_submission = $_POST['file'];

$email_from = 'info@kangaroofc.com';
$email_subject = 'New employee resume submistion';

$email_body = "Employee name: $name. \n
               Employee email: $visitor_email. \n
               Extra Information: $Message. \n"

$to = 'senithuperera111@gmail.com';
$header = "From: $email_from \r\n";
$header .= "Reply-To: $visitor_email \r\n"

mail($to, $email_subject, $email_body, $header);
header("LOcation: Contact.html");
?>