<?php

class num {

    static public function sum ($a ,$b){
        echo  $a+$b;
        echo "<br>";
        echo  self::multiply($a ,$b);
    }

    static public function multiply ($a ,$b){
        return $a*$b;
    }
    static public function absolute ($a){
       
        if ($a <0){
            $a =$a *-1;
            return $a;
        }
    }
}

$obj1 =new num();
  $obj1 ->sum(5 ,6) ;
echo "<br>";

// $obj2 =new num();
// echo $obj2 ->multiply(5 ,6) ;

// echo "<br>";

// $obj3 =new num();
// echo $obj3 ->absolute(-5);

