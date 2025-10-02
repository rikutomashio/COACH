<?php
$fizz = "FIZZ";
$buzz = "Buzz";
$fizzbuzz = "FizzBuzz";


for ($count = 1;$count<=50; $count++) {
    if ($count % 15 == 0){
        echo $fizzbuzz;
    }
    else if ($count % 3 == 0){
        echo $fizz;
    }
    else if ($count % 5 == 0){
        echo $buzz;
    }
    else{
        echo $count;
    }
}
