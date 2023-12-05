<?php
include('conn.php');


$error = "";
if ($_POST["email"] == ""){
    $error .= "Email is required</br>";
}



if ($error != "") {
    include("reset-password.php");
    die();
}


try {
    $randomNumberSecure = random_int(10000,99999);
} catch (\Exception $e) {
}







use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'lib/autoload.php'; // Adjust the path to PHPMailer autoloader

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com'; // Replace with your SMTP server
    $mail->SMTPAuth = true; // Set to false when using TLS
    $mail->Username = 'projectresetpw@outlook.com'; // Replace with your email
    $mail->Password = 'Password123!!!@';    // Replace with your email password
    $mail->SMTPSecure = 'STARTTLS'; // Use TLS, not SSL
    $mail->Port = 587; // TLS port

    // Recipients
    $mail->setFrom('projectresetpw@outlook.com', 'admin');
    $mail->addAddress('j02268971@jwu.edu', 'asd');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'Password Reset';
    $mail->Body = 'Follow this link to reset your password: <a href="https://www.kylestours.com/reset-password">https://www.kylestours.com/resetpw</a>  Code:'. $randomNumberSecure;

    $mail->send();
    echo 'Email sent successfully';

    // Redirect only if the email is sent successfully
    header("Location: login.php");
} catch (Exception $e) {
    $error .= "Mail delivery failed: " . $mail->ErrorInfo . "</br>";
    // You might want to log or display this error message
    include("forgot-password.php");
    die();
}
?>
