<?php
    // class person{
    //     var $name;
    //     function set_name($new_name){
    //         $this->name=$new_name;
    //     }
    //     function get_name(){
    //         return $this->name;
    //     }
    // }
?>

<?php
    class person{
        var $name;
        function __construct($persons_name){
            echo "<p>initialize class</p>";
        }
        function set_name($new_name){
            $this->name=$new_name;
        }
        function get_name(){
            return $this->name;
        }

        function __destructor(){
            echo "<p>end class</p>";
        }
    }
?>