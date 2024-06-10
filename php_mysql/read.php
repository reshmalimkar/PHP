<?php
include("./config.php");
$getStudents=$conn->prepare("SELECT * FROM `student`");
$getStudents->execute();
$student=$getStudents->fetchAll();
echo "<pre>";
// print_r($student);
echo "<table border=1px>";
foreach ($student as $students) {
    echo "<tr>
    <td>".$students['name']."</td>
    <td>".$students['city']."</td>
    <td>".$students['email']."</td>
    <td>".$students['contact']."</td>
     </tr>";
}
echo "</table>";

?>