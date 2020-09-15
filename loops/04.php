<?php

class FizzBuzz {
    public static function JizzleDaFizzle($maxVal) {

        $echoThis = '';

        for($i = 1; $i< $maxVal+1; $i++ ){

            if($i % 3 == 0 && $i % 5 == 0){
                $echoThis= $echoThis."FizzBuzz ";
            }elseif($i % 3 == 0){
                $echoThis= $echoThis."Fizz ";
            }elseif($i % 5 == 0){
                $echoThis= $echoThis."Buzz ";
            }else{
                $echoThis= $echoThis."$i ";
            }

            if($i % 20 == 0){
                $echoThis= $echoThis."\n";
            }

        }
        return $echoThis;
    }
}


$max = readline("Enter max value: \n");

echo FizzBuzz::JizzleDaFizzle($max)."\n";