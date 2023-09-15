<?php include("acara7.php");?>
<?php
    $stefan = new person("Stefan Mischook");
    $jimmy = new person("Nick Waddles");
    
    $stefan->set_name("Stefan Mischook");
    $jimmy->set_name("Nick Waddles");
    echo "Stefa's full name:".$stefan->name;
?>