<?php

$arr=[
    [1,"reshma","pune","reshma@gmail.com"],
    [2,"sayali","nashik","sayali@gmail.com"],
    [1,"ashwini","pune","ashwini@gmail.com"],
];
echo "<table border=1px>";
for($i=0;$i<count($arr);$i++){
    echo "<tr>";
    for($j=0;$j<count($arr[$i]);$j++){
        echo "<td>";
      echo $arr[$i][$j];
      echo "</td>";
    //   echo "<br>";
    }
    echo "</tr>";
}
echo "</table>";

?>