<?php

$employee1 = new stdClass();
$employee1->name = "Employee1";
$employee1->pay = 7.5;
$employee1->hours = "35";

$employee2 = new stdClass();
$employee2->name = "Employee2";
$employee2->pay = 8.2;
$employee2->hours = "47";

$employee3 = new stdClass();
$employee3->name = "Employee1";
$employee3->pay = 10;
$employee3->hours = "73";

function payCalculator(float $pay, float $hours){

    if($pay < 8){
        $answer = "error - too little pay\n";
    }elseif($hours > 60) {
        $answer = "error - too many hours\n";
    }else{


        if($hours > 40){

            $salary = (40 * $pay) + (($hours - 40)*$pay*1.5);

        }else{

            $salary = $hours*$pay;

        }

        $answer = "Employees salary is $salary\n";

    }

    return $answer;

}

echo payCalculator($employee1->pay,$employee1->hours);
echo payCalculator($employee2->pay,$employee2->hours);
echo payCalculator($employee3->pay,$employee3->hours);

