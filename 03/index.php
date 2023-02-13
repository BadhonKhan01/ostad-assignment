
<?php
// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision

function check($number){
    if($number % 2 == 0){
        echo "Even"; 
    }
    else{
        echo "Odd";
    }
}
$number = 39;
check($number)

// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series

$veryOld = 0;
$old = 0;
$new = 1;

for($i=0; $i<100; $i++){
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
    echo $veryOld . ' ';
}