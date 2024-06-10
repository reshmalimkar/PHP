<?php
$servername="localhost";
$username="root";
$password=NULL;
$dbname = "college";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die ("connection is failed" . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";
// $result=$conn->query("show tables")->fetch_all();
// // echo $result;
// print_r($result);

?>