<?php
$serverName = "localhost";
$userName = "root";  // Added semicolon here
$passWord = "Donut234@@";        // Added space after exclamation mark
$dbName = "u923207546_recipef";

$connection = mysqli_connect($serverName, $userName, $passWord, $dbName);

if (mysqli_connect_errno()) {

    exit();
}


session_start();

?>
