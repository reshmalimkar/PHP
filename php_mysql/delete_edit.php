<?php
include("./config.php");
// $student=$conn->prepare("delete from student where id='2'");
// echo $student->execute();
$student = $conn->prepare("select* from student");
$student->execute();
$result = $student->fetchAll();
// print_r($result);
echo "<table>";
foreach($student as $std){
    echo "<tr>
    <td>" .$std['name']."</td>
    <td>" .$std['city']."</td>
    <td>" .$std['email']."</td>
    <td>" .$std['contact']."</td>
    <td> <form  method='post'> <button>delete</button></form> </td>
    </tr>";

}
echo "</table>";
?>
