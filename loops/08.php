<?php

$minVal = readline("Min? \n");
$maxVal = readline("Max? \n");


class NumberSquare{

    public static function intShifter($min,$max){

        $matrix1 = [];
        $result = '';
        $z=0;


        for($i = $min; $i<$max+1;$i++){

            $matrix1[$z] = $i;
            $z++;

        }

        for($i = 0; $i < count($matrix1);$i++) {

            foreach($matrix1 as $item){
                $result = $result.$item;
            }
            $result = $result."\n";

            // shift nonem masiva pirmo elementu, atgriez to push funkcija kas pievieno to masiva beigas
            array_push($matrix1, array_shift($matrix1));

        }

        return $result;
    }
}

echo NumberSquare::intShifter($minVal,$maxVal);