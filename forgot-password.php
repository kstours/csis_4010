<?php
#actually make this function
?>
<link rel="stylesheet" type="text/css" href="styles.css">

<h1>Reset Password</h1>

<form action="" method="POST">
    <?php if(isset($error)) ?>
    <?php echo $error ?><br>
    Email: <input type="text" name="Email"></br></br>
    <input type="submit" value="Reset">
</form>
<form action="register.php">
    Need an account?
    <input type="submit" value="Register">
</form>
<form action="login.php">
   Have an account?
    <input type="submit" value="Login">
</form>


