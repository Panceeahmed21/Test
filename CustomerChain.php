<?php
class reward {
    private $points =0;

    public function level1()
    {
        return $this->points +=1;
       

    } public function level2()
    {
        return $this->points +=2;
      
        
    } public function level3()
    {
        return $this->points +=3;
        
    }
}

$obj=new reward();
echo $obj->level1();