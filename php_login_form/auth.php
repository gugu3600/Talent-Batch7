<?php 

for($i = 1; $i <= 5 ; $i++ ){

    $username = $_COOKIE["name$i"];
    $password = $_COOKIE["password$i"];

    echo $username;
    echo $password;

    if($_POST['name'] == $username and $_POST['password'] == $password){
        session_start();
        $_SESSION['user']['name'] = $_POST['name'];
        $_SESSION['user']['password'] = $_POST['password'];
    }



}

        header('location:index.php');



