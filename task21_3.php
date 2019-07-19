<?php
session_start();
$email = $_POST["email"];
$pass1 = md5($_POST["pass1"]);
$md5email=md5($email);
$user=[];
$pass=null;
$proper=[];

if ( isset($_SESSION["is_auth"]) && $_SESSION["is_auth"] == 1){
    echo "Kontynuacja sesji";
    header("Location: dashboard.php");
    $user=file("data/".$md5email);
    $_SESSION["name"]=$user[0];
    $_SESSION["lastname"]=$user[1];
}

if (file_exists("data/".$md5email)){
    $user=file("data/".$md5email);
    $pass=trim ($user[3]);
    if($pass1 == $pass){
        $_SESSION["is_auth"]=1;
        $_SESSION["name"]=$user[0];
        $_SESSION["lastname"]=$user[1];
        echo "Poprawne zalogowanie!";
        header("Location: dashboard.php");

    }
    else {
        echo "Nieprawidłowy e-mail lub hasło.";
    }
}
