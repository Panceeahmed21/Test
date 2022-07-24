<?php

class client {

   public $name ;
   public $NationalID;
    public $Address;

    function __construct($Name)
    {
        
        echo"Welcome $Name <br>";
    }
    public function buy()
    {
       echo"Purchasing operation is done <br>";
    }
    public function view()
    {
       echo"These are our products <br>";
    }
}

$client1=new client("Ahmed");

$client1->NationalID="219321121239231";
$client1->Address="6 Ahmed mahmoud street";

$client1->buy();