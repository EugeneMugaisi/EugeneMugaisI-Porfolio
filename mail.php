<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From: ".$name."<".$email.">\r\n";

$recipient = "mugaisieugene4@gmail.com";

mail($recipient, $subject, $message, $mailheader)
or die("Error!");

// echo"Message Sent";
echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eugene.Me</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    
    <!-- contact -->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Thank You For Contacting Me. I'll Get Back To You As Soon As Possible!</h2>
            <p class="back">> Go back to the <a href="index.html">homepage</a>.</p>
            <div class="contact-icons">
                <a href="https://www.linkedin.com/in/eugene-mugaisi/"><i class='bx bxl-linkedin'></i></a>
                <a href="https://web.facebook.com/eugene.gallardo.315"><i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/mugaisi_/"><i class='bx bxl-instagram'></i></a>
                <a href="https://github.com/EugeneMugaisi"><i class='bx bxl-github'></i></a>
            </div>
        </div>
    </section>
    
    <div class="last-text">
        <p>Developed by Eugene Mugaisi &copy 2022</p>
    </div>

    <!-- scroll top  -->
    <a href="#" class="top"><i class='bx bx-up-arrow-alt'></i></a>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script type="text/javascript" src="js/script.js"></script>


</body>
</html>




'


?>