<?php
if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';
    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat = $_POST['pwd-repeat'];

    if(empty($username) || empty($username) || empty($username) || empty($username)){
        header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
        exit();
    }
    else if (){
        header("Location: ../signup.php?error=invalidmail&uid=".$username);
        exit();
    }
}

