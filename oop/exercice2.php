<?php
class Vehicle{
    public $make;
    public $model; 
    public $color ;
    public $Wheels;
    public $engineNo;
   public function __construct($make, $model, $color, $Wheels, $engineNo){
        echo $this->make    =$make ;
        
        echo $this->model   =$model ;
      
        echo $this->color   =$color ;
    
        echo $this->Wheels  =$Wheels ;
      
        echo $this->engineNo=$engineNo ;
    
   }
   
}
$obj= new Vehicle('make', '1908', 'RED', 'xx', 'zz');
