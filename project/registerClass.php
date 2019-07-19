<?php
/*firstname = $_POST["firstname"];
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
}*/


require_once('register.php');

class Registration{
protected $firstname;
protected $lastname;
protected $email;
protected $pass1;
protected $pass2;
protected $md5email;

public function __construct($name,$lastname,$email, $pass1, $pass2, $md5email)
{
    $this->firstname = $_POST["firstname"];
    $this->lastname = $_POST["lastname"];
    $this->email = $_POST["email"];
    $this->pass1 = $_POST["pass1"];
    $this->pass2 = $_POST["pass2"];
    $this->md5email = md5($this->$email);
}

public function checkPassword(){
    if($this->pass1 == $this->pass2){
        $arr = [$this->name, $this->lastname, $this->email, $this->pass1, $this->pass2];
    } else{
        return false;
    }
}

public function saveData(){
    if(file_exists("/home/milosz/Desktop/darcia/projektzkodem/public/data/".$this->md5email.".dat")){
        return "Zostałeś zarejestrowany";
    } else{
        file_put_contents("/home/milosz/Desktop/darcia/projektzkodem/public/data/".$this->md5email.".dat", serialize($arr));
        return "Konto zostało utworzone poprawnie!";
    }
}


}