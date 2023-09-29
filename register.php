<link rel="stylesheet" type="text/css" href="styles.css">

<h1>Register</h1>
<form action="register_process.php" method="POST">
    <?php if(isset($error)) ?>
    <?php echo $error ?><br>
    Username: <input type="text" name="username"></br></br>
    Password: <input type="password" name="password"></br></br>
    <input type="submit" value="Register">
</form>
<form action="login.php" method="POST">
    Already have an account?
    <input type="submit" value="Login">
</form>




