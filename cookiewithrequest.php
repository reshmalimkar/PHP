<form action=""method="post">
    <input type="text" name="user" placeholder="enter user name">; 
    <br>
    <br>
    <button name="button" value="set">Set cookies</button>
    <br>
    <br>
    <button name="button" value="display">Display cookies</button>
    <br>
    <br>
    <button name="button" value="delete"> Delete</button>
</form>
<?php
if(isset($_POST['button'])){
    if($_POST['button']=="set"){
        $val=$_POST['user'];
        setcookie("user",$val);
        echo "cookie s set";
        }
        if($_POST['button']=="display"){
           if (isset($_COOKIE['user'])) {
            echo $_COOKIE['user'];
           }
           if($_POST['button']=="delete"){
            if (isset($_COOKIE['user'])) {
             setcookie("user",null,-1);
            }
}
}
}

?>