<?php
include "connection.php";
    $user = $_POST['username'];
    $psw = $_POST['password'];
    $level = $_POST['level'];
    $email = $_POST['email'];
    $sql="INSERT INTO register (username, password, level, email) VALUES ('".$user."', '".$psw."', '".$level."', '".$email."')";
    $query=$connection->query($sql);
    if ($query === true) {
        header('location: index.html');
    } else {
        echo "eroooooorrrrr";
    }
?>