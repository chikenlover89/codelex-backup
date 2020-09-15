<?php

$inWeight = readline("Your weight in kilograms:\n");
$inHeight = readline("Your height in centimeters:\n");

function BMI(float $kg, float $cm){
    $weight = $kg * 2.20462;
    $height = $cm * 0.393701;

    $BMI = $weight * 703 / pow($height,2);

    switch($BMI){
        case $BMI >= 18.5 && $BMI <= 25;
            $answer = "Your weight is optimal!\n";
            break;

        case $BMI < 18.5;
            $answer = "You are underweight!\n";
            break;

        case $BMI > 25;
            $answer = "You are overweight!\n";
            break;
    }

    return $answer;
}

echo BMI($inWeight,$inHeight);
