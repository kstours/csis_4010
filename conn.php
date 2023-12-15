<?php
$serverName = "localhost";
$userName = "u923207546_root";
$passWord = "Donut234@@";
$dbName = "u923207546_recipef";

$connection = mysqli_connect($serverName, $userName, $passWord, $dbName);

if (mysqli_connect_errno()) {
    exit();
}

session_start();

?>
