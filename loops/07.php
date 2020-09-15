<?php

$sum = readline("Desired sum: \n");
$diceSum = 0;
$dice1 = 0;
$dice2 = 0;

if(!is_numeric($sum) || ($sum > 12 || $sum < 2)){
    echo "error\n";
}else {

    while ($diceSum != $sum) {

        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);

        $diceSum = $dice1 + $dice2;

        echo "$dice1 and $dice2 = $diceSum\n";

    }
}
