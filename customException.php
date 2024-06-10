<?php
class AgeNotFoundException extends Exception{
    public function __construct($message="",$code=0, Throwable $previous = null)
    {
      parent::__construct($message, $code, $previous);
    }
}

class Test{
  public  $age;
  function agevalidate($age){
    try{
       if($age<=18){
        throw new AgeNotFoundException("you are not eligible for vote");
        }
        else{
            echo "eligible for vote";
        }
      }catch(AgeNotFoundException $e){
        echo $e->getMessage();
      }
  }
}
$Test=new Test();
$Test->agevalidate(14);


?>