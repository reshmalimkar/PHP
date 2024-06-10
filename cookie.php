<?php

setcookie("fruit","apple",time()+(86400));
// print_r($_COOKIE);
if(isset($_COOKIE['fruit'])){
    echo "current cookie is" .$_COOKIE['fruit'];
}else{
    echo "no cookie set";
}
?>