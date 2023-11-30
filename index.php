<!DOCTYPE html>
<script src="javaScript/toast.js"></script>
<script src="javaScript/search.js"></script>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/navbar.css">
<title>Recipe Finder</title>

<?php //include ('conn.php') ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>

<header>
    <?php include ('navbar.php') ?>

</header>



<main>
    <div class="recipe-finder-header">
        <h1>Recipe Finder</h1>
    </div>
    <div class="search-container">
        <label for="searchQuery"></label><input type="text" placeholder="Search..." id="searchQuery">
        <button type="submit" onclick="performSearch()">Search</button>
    </div>
</main>


<footer>

</footer>


</body>
</html>
