<?php
    class Car{
        public $model;
        public function setModel($model){
            $this -> model = $model;
        }
    }

    class SportsCar extends Car{
        public function hello(){
            return "beep, i am a ". $this -> model;
        }
    }

    $sportsCar1 = new SportsCar();
    $sportsCar1->setModel('Ferari 458');
    echo $sportsCar1->hello();
?>