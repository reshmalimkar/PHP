<?php
$host="localhost";
$username="root";
$password=null;

try {
    $conn=new PDO("mysql::host=$host; dbname=college",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "connection done";
} catch (Exception $e) {
   echo "connection failed".$e->getMessage();
}
echo "<br>";
$result=$conn->query("show tables");
while($row=$result->fetch(PDO::FETCH_NUM)){
    print_r($row);
}
?>