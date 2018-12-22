<?php

class user {
    public $username;
    public $password ;

    public function person(){
        echo $this->username ."<br />" ;
        return $this -> password ;
    }
}
$obj = new user();
echo "User name : ". $obj ->username = "Salome";
echo "<br />Password : ". $obj ->password ="passwordone";