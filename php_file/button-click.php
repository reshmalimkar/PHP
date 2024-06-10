<!DOCTYPE html>
<html lang="en">
<head>
    <title>call php function</title>
</head>
<body>
    <form action="" method="post">
     <button name="button" value="btn">call function</button>

    </form>
    
</body>
</html>
<?php
if(isset($_POST['button'])){
 clickTest();
}
function clickTest(){
    echo "function called on button";
}
?>