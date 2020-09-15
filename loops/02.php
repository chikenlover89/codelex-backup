<?php

$number = readline("Input number of terms: ");
$n = 3;
$base = $number;

for($i = 1; $i < $n; $i++){

    $number *= $base;

}

echo "Multiplied by itself $n times: ".$number."\n";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function