<?php
    session_start();
    include ('connection.php');
    include ('functions.php');

    $user_data = check_login($conn);

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
    
</head>
<body>
    
<a href="logout.php">logout</a>
<h1>this is the index page</h1>
<br>
hello, username
</body>
</html>
