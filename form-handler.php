<?php
$name = $_POST['name'];
$vistor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'earturosalvador@gmail.com';

$email_subject = 'New Form Submission';

$email_body ='User name: $name.\n'.
             'User email: $vistor_email.\n'.
             'Subject: $subject.\n'.
             'User Message: $message.\n';

$to = 'earturosalvador@gmail.com'

$headers = 'From: $email_from \r\n';

$headers .= 'Reply-To: $vistor_email \r\n';

mail($to, $email_subject,$email_body,$headers);

header('Location: contact.html')
?>