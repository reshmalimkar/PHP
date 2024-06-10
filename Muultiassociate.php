<?php
//associate array
// $array=["name"=>"reshma","age"=>23,"city"=>"pune"];
// foreach($array as $key=>$value){
//     echo $key ." is ". $value;
//     // print_r($key ." is ". $value);
//     echo "<br>";
// }

//multidimetional associate array

$array=[
    ["name"=>"reshma","age"=>23,"city"=>"pune"],
    ["name"=>"sayali","age"=>22,"city"=>"nashik"],
];
foreach($array as $user){
foreach($user as $key=>$value){
    echo $key ." is ". $value;
    echo "<br>";
}
}


?>