<?php
    $name = $_POST['name']
    $email = $_POST['email']
    $message = $_POST['message']

    $email_from = 'The wedding of Ivan Isadora';
    $email_subject = 'Attendance Confirmation'
    $email_body = "Name: $name.\n".
                  "Email: $email.\n".
                  "Message: $message.\n";

    $to ="ivanwd7@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");
?>