<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="css/navbar.css">

<?php  include ('navbar.php');
//include('conn.php');?>
/<title>Recipe Finder</title>
<div class="recipe-finder-header">
    <h1>Recipe Finder</h1>
</div>




<div class="registerBackground">
    <div class="registerContainer">

        <a href="login.php">
            <img src="img/closeButton.png" alt="closeButton" class="close">
        </a>



        <h1>Register</h1>
    <div class="errors">
    <?php if(isset($error)) ?>
    <?php echo $error ?><br>
    </div>


        <div class="textBoxes">
            <form action="register_process.php" method="POST">
                Email:  <input type="text" name="email"></br></br>

                Username: <input type="text" name="username"></br></br>
                Password: <input type="password" name="password"></br></br>
                Confirm Password:
                <div class="confirmPassword">
                    <input type="password" name="cpassword">
                </div>
                <div class ="registerButton">
                    <input type="submit" value="Register">
                </div>
            </form>
        </div>






    </div>
</div>