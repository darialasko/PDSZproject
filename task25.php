<?php


 abstract class Data{
    public $data;
    public $path;
    public $dname;

    public function __construct($fileName)
    {
        $this->dname = $fileName;
    }
    
    
    public function load()
    {
        if(file_exists($this->path."/".$this->$dname.".dat")){
            $this-> data = file_get_contents($this->path."/".$this->$dname.".dat");
            return $this-> data;
        } else {
            return false;
        }
    }


    public function update()
    {
        file_put_contents($this->path."/".$this->$dname.".dat", serialize($this-> data));
    }
}

class User extends Data{

        private $name;
        private $lastname;
        private $email;
        private $pass1;

        public function __construct($email){
            $md5 = md5($email);
            if($md5){
                $isLoaded = $this-> load();
                if($isLoaded){
                    $this-> populate();
                } else{
                    $this->email = $email;
                    $this-> save();
                }
            }
        }



        public function save(){
            $this-> data= ['name' => $this-> name,'lastname' => $this-> lastname,'email' => $this-> email,'pass1' => $this-> pass1];
            $this-> update();
        }

        public function populate(){
            $this-> name = $this->data['name'];
            $this-> lastname = $this->data['lastname'];
            $this-> email = $this->data['email'];
            $this-> pass1 = $this->data['pass1'];
        }
}