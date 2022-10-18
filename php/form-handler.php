<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "mugaisieugene4@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("location: index.php/mailsend")
}


require "autoload.php"

$email_from = '';

$email_subject = 'New Website Message';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                        "User Message: $message.\n"; 