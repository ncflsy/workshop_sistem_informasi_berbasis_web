<?php
    class Car{
        public function hello(){
            return "beep";
        }
    }

    class SportsCar extends Car{
        public function hello(){
            return "hallo";
        }
    }

    $sportsCar1 = new SportsCar();
    echo $sportsCar1 -> hello();
?>