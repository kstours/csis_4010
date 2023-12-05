<?php

$error = "";
if ($_POST["email"] == ""){
    $error .= "Email is required</br>";
}

if ($_POST["code"] == ""){
    $error .= "Code is required</br>";
}


if ($_POST["code"] != "12345" && $_POST["code"] != ""){
    $error .= "Code is not valid</br>";
}



if ($error != "") {
    include("reset-password.php");
    die();
}

?>