<?php
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];
$md5email = md5($email);


    if ($pass1 != $pass2){
        echo "Podane hasła nie są takie same!";
        die;
    } else{
        $arr = [$name, $lastname, $email, md5($pass1), md5($pass2)];
        print_r($arr);
    }

if(file_exists("/home/milosz/Desktop/darcia/projektzkodem/public/data/".$md5email.".dat")){
    echo "Podany adres email jest już zarejestrowany";
} else {
    //fopen("/data/{$md5email}.dat", "w");
    $x = file_put_contents("/home/milosz/Desktop/darcia/projektzkodem/public/data/".$md5email.".dat", serialize($arr));
    echo "Konto zostało utworzone poprawnie!";
    var_dump($x);
}