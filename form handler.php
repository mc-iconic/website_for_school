<?php
$name = $_POST['Name'];
$visitor_email = $_POST['E-MAIL'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];

$email_from = 'info@domainname.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n"
            "User E-MAIL:$visitor_email.\n".
            "Subject: $subject.\n".
            "User Message: $message.\n";


   $to = 'gschandraulpublicschool@rediffmail.com'  
   
   $headers = "From : $email_from \r\n";

   $headers .= "Reply-To: $visitor_email \r\n"; 

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");

?>