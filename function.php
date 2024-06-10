<?php
function displayUserData(){

    echo "user name is Reshma <br>";
    echo "user age is 23";
    
}
function m1(){
    displayUserData();
    echo "hello <br>";
}
m1();

function sum($a,$b){
    echo $a+$b;
    echo "<br>";
}
sum(10,20);
sum(15,20);
sum(10,50);
sum(10,56);


function userData($name,$color){
    echo "<h1 style='color:$color'>$name</h1>";

}
userData("reshma Limkar" , "red");
userData("reshma Limkar" , "green");
userData("reshma Limkar" , "yellow");

//function with return type

function userName(){
    return" smith";
}
 echo "<h1>Hi My name is " .userName() ."</h1>";

 //function with default

//  function fruit($name,$color="yellow"){
//     echo "this is apple $name and it's color is $color;  
//  }
//  fruit("banana","green");
 function fruit($name,$color="yellow"){
    echo "this is apple $name and it's color is $color";  
 }
 Fruit("banana");


 ?>




