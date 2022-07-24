<?php


class user {
 public   $query ;
    function __construct()
    {
   echo $query ="Select ";
    }

    public function select(string $column)
    {
      return  $this->query ="$column";
    }
public function get()
{
   echo " from users";
}


}

$obj = new user ();
echo $obj ->select("name,email");
echo $obj ->get();


//Another solution


// class points{

//     public function select(string $column)
//     {
//        echo "Select $column";
//     }
//     public function get()
//     {
//        echo " From users";
//     }
// }

// $obj =new points ();
// $obj->select("email,address,ID");
// $obj->get();