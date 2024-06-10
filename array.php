<?php
//indexted Array
// $user=array("smith","alien","peter");
$user=["smith","alien","peter"];
// echo $user[0];
for($i=0;$i<count($user);$i++){
    echo "<h2 style='color:red'>$user[$i]</h2>";
    // echo "<br>";
}
//for each loop

$arr=["hi","hello","hey"];
foreach($arr as $x){
    // if($x=="hello"){
    //     break;
    // }
    // if($x=="hello"){
    //     continue;
    // }
    echo $x;
    if($x=="hello"){
        goto jump;
    }
    echo "<h3 style='color:green'>$x</h3>";
    // echo "<br>";

    jump:
    echo "I am very happy<br>";
}
//Associative Array -
$userDetails=["name"=>"smith","age"=>23,"city"=>"pune"];
// echo $userDetails["name"];
foreach($userDetails as $key=>$data){
    echo $key ." is " .$data; 
    echo "<br>";
}
//Multidimetional array---nested arry
$user=[
    [1,"reshma","pune","reshma@gmail.com"],
    [2,"sayali","nashik","sayali@gmail.com"]
];
// echo "<pre>";
// print_r ($user);
// echo "</pre>"

for($i=0;$i<count($user);$i++){
    for($j=0;$j<count($user[$i]);$j++){
    print_r($user[$i][$j]);
    echo "<br>";
    }
}
?>