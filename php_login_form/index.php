<?php
    session_start();
    if(!isset($_SESSION['user'])){

        header("location:login.php?error=true");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <h1>Hello World</h1>
    <a href="logout.php">Logout</a>
</body>
</html>