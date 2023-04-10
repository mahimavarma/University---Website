<?php
$name = $_POST['name'];
$visitor_email =$_POST['email'];
$subject=$_POST['subject'];
$message = $_POST['message'];

$email_form ='internationaloffice@harvard.edu';
$email_subject = 'New Form Submission';
$email_body ="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Subject : $subject.\n".
                "User Message: $message.\n";

$to = 'mahimavarma1609@gmail.com';
$headers="Form :$email_from\r\n";
$headers .="Reply-To:$email_from\r\n";

   mail($to,$email_subject,$email_body,$headers)
   header("Location: contact.html");

?>