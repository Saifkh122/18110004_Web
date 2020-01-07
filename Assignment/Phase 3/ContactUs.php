<?php 
    $name = $_POST['name'];
    $visitor_email = $_POSTp['email'];
    $message = $_POST['message'];

    $email_form = 'saif.khatatbeh@htu.edu.jo';
    $email_subject = "new form submision";
    $email_body = "User Name = $name.\n".
                  "User Email = $visitor_email.\n".
                  "User Message = $message.\n";
    
    $to = "saif-kh133@hotmail.com";
    $headers = "From: $email_form \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: ContactUs.html");

?>