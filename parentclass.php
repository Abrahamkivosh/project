<?php

class dad{
    public $father ;
    public function main(){
        echo $this ->father = "[method dad] I im your dad <br />";

    }
}
class son extends dad {
    public $nameson ;
    public function more(){
        echo "Im dad son";
         echo $this -> nameson = " My name is John <br />";
    }
    public function ondad(){
        parent::main();
    }
}

$obj = new son();

$obj->more();
$obj->ondad();