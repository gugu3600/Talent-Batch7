<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <form action="/auth.php" method="post">
        <?php if (isset($_GET['error'])) : 
            echo "Incorrect username or password" ;
            endif ?>
        <input type="text" name="name" placeholder="name">
        <br/>
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="login">
        <a href="register.php">register Now</a>
    </form>
    
</body>
</html>