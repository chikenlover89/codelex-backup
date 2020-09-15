<?php

$list = [];

$list[0] = str_split("words");
$list[1] = str_split("dont");
$list[2] = str_split("come");
$list[3] = str_split("easy");
$list[4] = str_split("ububbu");

//var_dump($list);

$randomKey = rand(0,count($list)-1);
$unknown = $list[$randomKey];
$misses = '';
$tries = 5;
$win = false;

for($i = 0;$i<count($unknown);$i++){
    $unknown[$i] = '_';
}

function drawWord($arr){
    echo "Word: ";
    foreach ($arr as $item){
        echo "$item ";
    }
    echo "\n";
}


function checkForLetter(&$word, &$wordArray,$letterToFind,$randKey,&$miss,&$triez){

    $letterFound = false;
    $key = 0;
    while($key !== false) {

        $key = array_search($letterToFind, $wordArray[$randKey]);

        if($key !== false) {
            $wordArray[$randKey][$key] = '_';
            $word[$key] = $letterToFind;
            $letterFound = true;
        }

        if($letterFound === false && $key === false){
            $miss = $miss.$letterToFind;
            $triez--;
        }

    }
}

function checkIfWon($arr,&$winner){

    $key = array_search('_',$arr);
    if($key === false){
        $winner = true;
    }


}

echo "Guess the word, you can miss 5 times!\n";

while($tries != 0 && $win == false) {

    //drawWord($list[$randomKey]);
    drawWord($unknown);
    echo "Misses: $misses\n";
    $letter = readline("Guess: ");
    checkForLetter($unknown, $list, $letter, $randomKey, $misses,$tries);
    checkIfWon($unknown,$win);

    if($tries == 0){
        echo "You lost!\n";
    }
    if($win == true){
        drawWord($unknown);
        echo "You won!\n";
    }
    echo "\n";
}

