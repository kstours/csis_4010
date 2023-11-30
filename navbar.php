<script src="javaScript/toast.js"></script>

<?php
if($_SESSION["username"] == null){
    ?>
    <title>Recipe Finder</title>
    <nav>
        <ul>
            <li><a href="login.php">Login</a></li>
            <li><a onclick="showToast('You must be logged access that page!',1000)">Upload</a></li>
            <li><a onclick="showToast('You must be logged access that page!',1000)">Favorites</a></li>
        </ul>
    </nav>
    <?php
}else{ ?>
    <nav>
        <ul>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="settings">Settings</a></li>
            <li><a href="upload">Upload</a></li>
            <li><a href="favorites">Favorites</a></li>
        </ul>
    </nav>
<?php } ?>
