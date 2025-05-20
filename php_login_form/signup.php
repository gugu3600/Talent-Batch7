<?php

$username = $_POST["name"];
$password = $_POST["password"];
$i = 1;
while (isset($_COOKIE["name$i"])) {
    $i++;
    if ($i > 5) {
        $i = 1;
        break;
    }
}

setcookie("name$i", $username);
setcookie("password$i", $password);

header('location:login.php');

