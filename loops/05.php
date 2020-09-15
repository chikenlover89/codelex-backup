<?php

class Piglet
{
    public static function OinkOink()
    {
        $doGame = "yes";
        $points = 0;

        echo "Welcome to piglet!\n";

        while($doGame == "yes" || $doGame == "y"){

            $roll = rand(1,6);
            echo "You rolled $roll!\n";

            if($roll != 1){
                $doGame = readline("Roll again? \n");
                $points += $roll;
            }else{
                $doGame = "no";
                $points = 0;
            }

            echo "\n";
        }

        echo "You got $points!\n";
    }
}

Piglet::OinkOink();
