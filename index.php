<?php
include ('conn.php');

if($_SESSION["username"] == null){
    include ('login.php');
    die();
}else{
    echo "welcome ".$_SESSION["username"];
    ?>
    <link rel="stylesheet" type="text/css" href="styles.css">

    <h1>Home</h1>
    <br>
    <form action="logout.php" method="POST">
        <input type="submit" value="Logout">
    </form>
<?php
}
?>