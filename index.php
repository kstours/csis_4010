<!DOCTYPE html>
<script src="javaScript/toast.js"></script>
<script src="javaScript/search.js"></script>

<?php include ('conn.php') ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/navbar.css"
</head>
<body>
<link rel="stylesheet" href="css/index.css">
<header></header>

<?php

if($_SESSION["username"] == null){
    ?>
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


<div class="recipe-finder-header">
    <h2>Recipe Finder</h2>
</div>


<div class="search-container">
    <input type="text" placeholder="Search..." id="searchQuery">
    <button type="submit" onclick="performSearch()">Search</button>
</div>
<main></main>
<footer></footer>
</body>
</html>
