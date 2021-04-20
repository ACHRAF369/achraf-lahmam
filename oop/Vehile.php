<?php
class Vehicle{
     public $make;
     public $model; 
     public $color ;
     public $Wheels;
     public $engineNo;
     function getMake(){
    
        return $this->make;
     } 
     function getModel(){
        return  $this->model;
        } 
     function getColor(){
        return $this->color;
     } 
     function getNoOfWheels(){
        return $this->Wheels;
     } 
     function getEngineNumber(){
        return $this->engineNo;

     }
    }
     class Vehicle{
     function setMake($make){
    
        $this->make=$make;
     } 
     function setModel($model){
        $this->model=$model;
        } 
     function setColor($color){
        $this->color=$color;
     } 
     function setNoOfWheels($Wheels){
        $this->Wheels=$Wheels;
     } 
     function setEngineNumber($engineNo){
        $this->engineNo=$engineNo;

     }
}
$obj= new Vehicle;
$obj->getMake();
$obj->getModel();
$obj->getColor();
$obj->getNoOfWheels();
$obj->getEngineNumber();

$obj2= new Vehicle2;
echo $obj2->SetMake('achraf');
echo $obj2->SetModel('achraf');
echo $obj2->SetColor('achraf');
echo $obj2->SetNoOfWheels('achraf');
echo $obj2->SetEngineNumber('achraf');
console.log($obj2);