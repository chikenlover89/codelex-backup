<?php

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = readline("Enter your choice (1-4) : \n");

class Geometry {
    public static function areaOfCircle(float $radius) {

        if ($radius < 0 ){
            $answer = "Error - negative value";
        }else{

            $answer = "Result = ".number_format(M_PI * pow($radius,2),2);
        }

        return $answer;

    }

    public static function areaOfRectangle(float $length, float $width) {

        if ($length < 0 || $width < 0 ){
            $answer = "Error - negative value";
        }else{

            $answer = "Result = ".number_format($length * $width,2);
        }

        return $answer;

    }

    public static function areaOfTriangle(float $length, float $width) {

        if ($length < 0 || $width < 0 ){
            $answer = "Error - negative value";
        }else{

            $answer = "Result = ".number_format($length * $width *0.5,2);
        }

        return $answer;

    }

}

if($choice > 4 || $choice < 1){
    echo "error - please enter a number from 1 to 4\n";
}elseif($choice == 4){
    echo "Bye!\n";
}elseif($choice == 1){
    $input = readline("Enter radius : \n");
    echo Geometry::areaOfCircle($input)."\n";
}elseif($choice == 2){
    $input1 = readline("Enter length : \n");
    $input2 = readline("Enter width : \n");
    echo Geometry::areaOfRectangle($input1,$input2)."\n";
}elseif($choice == 3){
    $input1 = readline("Enter base: \n");
    $input2 = readline("Enter height: \n");
    echo Geometry::areaOfTriangle($input1,$input2)."\n";
}
