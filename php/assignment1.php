<?php 

$numbers = 100;

for ($i = 1 ; $i <= $numbers ; $i++){

     if ($i % 5 === 0 and $i % 3 === 0){

        echo "number = " . $i . "FizzBuzz";
        echo "<br/><br/>";
        echo "<br/><br/>";
    }

    else if ($i % 3 === 0){
        echo "number = " . $i . "Fizz";
        echo "<br/>";
        echo "<br/><br/>";
    } 
    else if  ($i % 5 === 0){
        echo "number = " . $i . "Buzz";
        echo "<br/>";
        echo "<br/><br/>";

    }

   

}