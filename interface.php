<?php

//basic system
interface eCommerce {
    public  function buy();
    public  function view();
    public  function sell();
   
}
 
//developer side 
class amazon implements eCommerce{
    public function buy () {
        echo "Buying products <br>";
    }
    public function view (){
        echo "viewing products <br>";
    }
    public function sell () {
        echo "selling products <br>";
    }
}
class jumia implements eCommerce{
    public function buy () {
        echo "Buying products <br>";
    }
    public function view (){
        echo "viewing products <br>";
    }
    public function sell () {
        echo "selling products <br>";
    }
}

function connect ($obj)
{
    $obj-> buy();
    $obj-> view();
    $obj-> sell();
}

$object = new jumia ();
connect($object);

