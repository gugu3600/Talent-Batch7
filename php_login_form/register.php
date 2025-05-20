<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <?php 
        session_start();
        if(isset($_SESSION['user'])){

            header('location:index.php');
        }
        ?>
    <form action="signup.php" method="post">
        <input type="text" name="name" placeholder="Username">
        <br/>

        <input type="password" name="password" placeholder="Password">
        <br/>
        
        <input type="submit" value="Sign Up">
    </form>
    
</body>
</html>