<?php
// $a=10;
// echo $a;

for($i=0;$i<=10;$i++){
    echo "$i<br>";
    if($i==7){
        goto jump;
    }
   
}
$name="reshma";
echo $name;

jump:
echo "statement is jump on line no 14";

?>