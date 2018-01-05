<?php
## https://www.hackerrank.com/challenges/30-class-vs-instance/problem

class Person{
    public $age;
   public function __construct($initialAge){
       if($initialAge < 0) {
           print("Age is not valid, setting age to 0.\n");
           $this->age = 0;
       }else {
           $this->age = $initialAge;
       }
   }
   public  function amIOld(){
            // Do some computations in here and print out the correct statement to the console
       $theage = $this->age;

       if($theage < 13) {
           print("You are young.\n");
       } else if($theage >= 13 && $theage < 18) {
         print("You are a teenager.\n");
       } else {
           print("You are old.\n");
       }

    }
   public  function yearPasses(){
          // Increment the age of the person in here
        $this->age += 1;
    }


}

#############################################

$T = intval(fgets(STDIN));
 for($i=0;$i<$T;$i++){
     $age=intval(fgets(STDIN));
     $p=new Person($age);
     $p->amIOld();
     for($j=0;$j<3;$j++){
         $p->yearPasses();
     }
     $p->amIOld();
     echo "\n";

 }
?>
