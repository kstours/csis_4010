<link rel="stylesheet" type="text/css" href="css/navbar.css">

<h1>Login</h1>

<form action="login_process.php" method="POST">
    <?php if(isset($error)) ?>
    <?php echo $error ?><br>
    Username: <input type="text" name="username"></br></br>
    Password: <input type="password" name="password"></br></br>
    <input type="submit" value="Login">
</form>
<form action="register.php">
    Need an account?
    <input type="submit" value="Register">
</form>
<form action="forgot-password.php">
    forgot password?
    <input type="submit" value="Reset Password">
</form>