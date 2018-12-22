<?php
/*When you extend a class and declare your own constructor, you should be aware that
PHP will not automatically call the constructor method of the parent class. To be certain
that all initialization code is executed, subclasses should always call the parent con-
structors */

$obj = new tiger();

echo "Tiger have ..";
echo " <br />far ". $obj -> far ;
echo " <br />stripes". $obj ->stripes;


class wildcat{
    public $far ;

    public function __construct()
    {
         $this -> far = "FALSE" ;
        
    }
}

class tiger extends wildcat {
    public $stripes ;

    public function __construct()
    {
        parent::__construct(); //call parent constructor first
         $this -> stripes = "TRUE" ;
    }
}

class end {
    private $author;

    final function copyright()
        {
            echo "<br />This program was written by : <strong>". $this ->author ="Abraham" . "</strong>";
        }
    
}

$final = new end();
echo $final ->copyright();