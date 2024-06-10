<?php
// static method and static variable
class Test{
public static $a="hello";
public static function m1(){
    echo "Hello everyOne";
}

}
echo Test::$a;
echo "<br>";
echo Test::m1();


?>