<?php
    function FindHighValue($value1, $value2){
        if($value1 >= $value2){
            echo "Bilangan yang terbesar adalah: ".$value1;
        } else{
            echo "Bilangan yang terbesar adalah: ".$value2;
        }
    };
    
    FindHighValue(150,240);
    
?>