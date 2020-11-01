<?php

class ratRace{

    private array $playerX = [];
    private array $playerO = [];
    private string $game = '';

    public function init():void
    {

        $this->playerO = array_fill(0,30,"_");
        $this->playerX = array_fill(0,30,"_");
        $this->playerO[0] = "O";
        $this->playerX[0] = "X";

    }

    public function checkIfWon():bool
    {
        return (($this->playerO[29] == "O") || ($this->playerX[29] == "X"));
    }

    public function drawGame():string
    {
        $this->game = '';

        foreach($this->playerX as $item){
            $this->game .= $item;
        }
        $this->game .= "\n";

        foreach($this->playerO as $item){
            $this->game .= $item;
        }
        $this->game .= "\n";

        return $this->game;
    }

    public function randomAdvance():void
    {
        $whereIs = array_search("X",$this->playerX);
        $step = rand(1,3);
        $this->playerX[$whereIs+$step] = "X";
        $this->playerX[$whereIs] = "_";

        $whereIs = array_search("O",$this->playerO);
        $step = rand(1,3);
        $this->playerO[$whereIs+$step] = "O";
        $this->playerO[$whereIs] = "_";


    }


}

$newGame = new ratRace();

$newGame->init();
echo $newGame->drawGame();

while(!$newGame->checkIfWon()){
    sleep(1);
    echo exec(clear);
    $newGame->randomAdvance();
    echo $newGame->drawGame();
}
