<?php
include('conn.php');

// Now, you can access $connection here since it was declared in conn.php

$error = "";

if ($_POST["username"] == ""){
    $error .= "Username is required</br>";
}
if ($_POST["password"] == ""){
    $error .= "Password is required</br>";
}

if ($error != "") {
    include("register.php");
    die();
}

$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, password_hash($_POST["password"], PASSWORD_BCRYPT, ["salt" => "asd;jhkfasdjkhfahsjdklfajklshdflhjkasdf"]));
mysqli_query($connection, "insert into users (username,password) values ('$username','$password')") or die("Unable to run query");
header("Location: login.php");
?>
