<?php

class parents {
    public $name;
    public $NofChild;
    public $education;
    public $insurance =100;

    public function insur ($noOfChild)
    {
    return   $InsValue=$noOfChild*$this->insurance;
    }
}

class employee extends parents{

}


$obj1=new employee();
echo $obj1->insur(3);
