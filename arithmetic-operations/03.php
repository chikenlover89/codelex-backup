<?php

$uBound = 1;
$lBound = 0;

$sum = 0;
$average = 0;

for($i = $lBound; $i < $uBound+1; $i++){
    $sum += $i;
}

$average = ($uBound + $lBound) / 2;

echo "The sum of $lBound to $uBound is $sum\n";
echo "Average is $average\n";