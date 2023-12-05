<?php
//include('conn.php');


$error = "";
if ($_POST["email"] == ""){
    $error .= "Email is required</br>";
}

if ($_POST["username"] == ""){
    $error .= "Username is required</br>";
}
if ($_POST["password"] == ""){
    $error .= "Password is required</br>";
}

if ($_POST["cpassword"] == ""){
    $error .= "Confirm Password</br>";
}


if($_POST["password"] != $_POST["cpassword"]){
    $error .= "Passwords Do not Match!</br>";

}


if ($error != "") {
    include("register.php");
    die();
}
$email = mysqli_real_escape_string($connection, $_POST["email"]);
$username = mysqli_real_escape_string($connection, $_POST["username"]);
$password = mysqli_real_escape_string($connection, password_hash($_POST["password"], PASSWORD_BCRYPT, ["salt" => "asd;jhkfasdjkhfahsjdklfajklshdflhjkasdf"]));
mysqli_query($connection, "INSERT INTO dbusers (email, username, password) VALUES ('your_email', 'your_username', 'your_password')") or die("Unable to run query");
header("Location: login.php");
?>
