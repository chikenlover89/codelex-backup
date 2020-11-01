<?php

include_once './ElementInterface.php';
include_once './AbstractElement.php';
include_once './Rock.php';
include_once './Paper.php';
include_once './Scissors.php';
include_once './Spock.php';
include_once './Lizard.php';
include_once './Result.php';
include_once './TieResult.php';
include_once './WinResult.php';
include_once './LooseResult.php';

$playTem = [new Rock(), new Scissors(), new Paper(), new Lizard(),new Spock()];

for ($i = 0; $i < count($playTem); $i++) {
    if ($i == (count($playTem) - 2)) {
        echo get_class($playTem[$i]) . " or ";
    } elseif ($i == (count($playTem) - 1)) {
        echo get_class($playTem[$i]) . "\n";
    } else {
        echo get_class($playTem[$i]) . ", ";
    }
}

$playerChoice = readline("Your choice: \n");
$playerClass = new $playerChoice;

$pcChoice = $playTem[rand(0, count($playTem) - 1)];


echo "PC chose: " . get_class($pcChoice) . "\n";

$result = $playerClass->beats($pcChoice);
echo $result->getMessage() . "\n";