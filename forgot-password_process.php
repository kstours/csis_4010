<?php
//include('conn.php');

// Now, you can access $connection here since it was declared in conn.php

$error = "";
if ($_POST["email"] == ""){
    $error .= "Email is required</br>";
}


if ($error != "") {
    include("forgot-password.php");
    die();
}

header("Location: login.php");
?>





