<?php
//local variable-variable used inside function
//gloal variable- variable declared outside function we can use it anywhere

// local variable
/*function getName(){
    $name="Hello";
   
}
echo $name;
getName();*/

// $name="hello";
// function getName(){
//     global $name;
//     echo $name;
// }
// getName();

//
//can we use local and global variable with same name

// $name="hello";
// function getName(){
//     $name="hi";
//     echo $name;
// }
// getName();

//nested function

$name="reshma";
function Outer(){
    
    $name="sayali";
    echo $name;
    echo "<br>";
    // inner();
    function inner(){
        $name="ashwini";
        echo $name;
        echo "<br>";
        global $name;
        echo $name;

        
    }
}
Outer();
inner();






 ?>