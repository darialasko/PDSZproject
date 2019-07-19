<?php
require_once('task26.php');

class Registration{
protected $name;
protected $lastname;
protected $email;
protected $pass1;
protected $pass2;
protected $md5email;

public function __construct($name,$lastname,$email, $pass1, $pass2, $md5email)
{
    $this->name = $_POST["name"];
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