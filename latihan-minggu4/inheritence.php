<?php
    class Car{
       private $model;
       public function setModel($model){
        $this->model = $model;
       } 

       public function hello(){
        return "beep, i am a".$this->model;
       }
    }

    class SportsCar extends Car{

    }
    $sportsCar1 =  new SportsCar();
    $sportsCar1 -> setModel('Tesla');
    echo $sportsCar1 -> hello(); 
?>