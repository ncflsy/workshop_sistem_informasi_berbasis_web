<?php
    abstract class Car{
        protected $tankVolume;
        public function setTankVolume($volume){
            $this-> tankVolume = $volume;
        } 

        abstract public function calcNumMilesOnFullTank();
    }

    $sportsCar1 -> hello();
    echo $sportsCar1->hello();
?>