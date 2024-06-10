<form action="" method="post">
<input type="text" placeholder="enter name" name="name"><br><br>
<input type="text" placeholder="enter city" name="city"><br><br>
<input type="text" placeholder="enter email" name="email"><br><br>
<input type="text" placeholder="enter contact" name="contact"><br><br>
<button type="submit">Add Student </button>
</form>


<?php
if(isset($_POST['name'])){
$name=$_POST['name'];
$city=$_POST['city'];
$email=$_POST['email'];
$contact=$_POST['contact'];

include("./config.php");
$query=$conn->prepare("
insert into `student`(`id`,`name`,`city`,`email`,`contact`) values(Null,'$name','$city',
'$email','$contact')
");
$result=$query->execute();
if($result){
    echo "data inserted";
}else{
    echo "data not inserted";
}
}

?>