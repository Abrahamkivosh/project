<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>work with text</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
    <label for="name">Enter your name </label>
    <input type="text" name="name" size="20" required>
    <button type="submit" name="submit">SUBMIT</button>
    </form>
    <?php

    function valid($text){
        $text = trim( htmlentities($text) );
        $text = trim(htmlspecialchars($text));
        return $text ;
    }
    
    if(isset($_POST['submit'])){
        $name = valid($_POST['name']);
        if(is_numeric($name)){
           echo  $error = "<br />Please type Letters only for your name";
            exit;
        }else{

            function username($nam){
                $nam = ucfirst(strtolower($nam)); // pass by value
                return $nam ;
            }

            echo username($name);
        }
    }


            

    ?>
    
</body>
</html>