<?php
class Fruit{
    public $name;
    public $color;
    //to intialize properties
    function __construct($name)
    {
     $this->name=$name;
        
    }
    function getname(){
    return $this->name;
    }
    function __destruct()
    {
       echo "hello";
    }

}
$fruit=new Fruit("apple","color");
echo $fruit->getname();
echo "<br>";
?>