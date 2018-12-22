<?php
class dad {
    public $mom;
    public function childrean(){
        echo "This is the main method in class dad";
        echo  $this-> mom ="jonson" ;
    }
}
class son extends dad{
    public $years;

    public function total(){
        echo "This method in class son can inherite properties from parent class dad";
    }
}