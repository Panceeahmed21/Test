<?php

abstract class WB {
  static  public function loginin()
    {
         echo "Logging to system <br>";
    }
   final public function logout()
    {
         echo "Logging out from system <br>";
    }
   abstract public function ConnecttDB();
   
}

//developer side 

class WP_Devp extends WB {

    public function ConnecttDB(){
echo "Connection successfully <br>";
    }
}

$obj =new WP_Devp ();
$obj ->ConnecttDB();


WB::loginin();