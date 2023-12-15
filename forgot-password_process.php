<?php
$serverName = "localhost";
$userName = "u923207546_root";
$passWord = "Donut234@@";
$dbName = "u923207546_recipef";
$connection = mysqli_connect($serverName, $userName, $passWord, $dbName);
$error = "";
$good = "";
include('conn.php');
if ($_POST["email"] == "") {
    $error .= "Email is required</br>";
}
if ($error != "") {
    include("reset-password.php");
    die();
}
try {
    $randomNumberSecure = random_int(10000, 99999);
} catch (\Exception $e) {
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'lib/autoload.php';
$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp-mail.outlook.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'projectresetpw@outlook.com';
    $mail->Password = 'Password123!!!@';
    $mail->SMTPSecure = 'STARTTLS';
    $mail->Port = 587;

    $mail->setFrom('projectresetpw@outlook.com', 'Admin');
    $mail->addAddress($_POST["email"], '');

    $mail->isHTML(true);
    $mail->Subject = 'Password Reset';
    $mail->Body = 'Follow this link to reset your password: <a href="https://www.kylestours.com/reset-password.php">https://www.kylestours.com/reset-password.php</a>  Code:' . $randomNumberSecure;
    $mail->send();
    $res = mysqli_query($connection, "select * from dbusers where email = '$email'") or die ("Unable to connect to database");
    mysqli_query($connection, "UPDATE dbusers SET passwordResetKey = '$randomNumberSecure' WHERE email = '{$_POST["email"]}'") or die("Unable to run query");
    $good .= "Please check your email for the password reset link!";
    if ($good != "") {
        include("forgot-password.php");
        die();
    }


} catch (Exception $e) {
    $error .= "Mail delivery failed: " . $mail->ErrorInfo . "</br>";
    include("forgot-password.php");
    die();
}
?>
