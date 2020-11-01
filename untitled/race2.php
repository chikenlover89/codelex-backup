<?php

class ratRace{

    private array $players = [];
    private array $pLines = [];
    private string $game = '';

    public function __construct(array $players){

        $this->players = $players;

        for($i = 0; $i < count($this->players);$i++){
            $this->pLines[$i] = array_fill(0,30,"_");
        }

        for($i = 0; $i < count($this->pLines);$i++){
            $this->pLines[$i][0] = $this->players[$i];
        }

        var_dump($this->players);
        var_dump($this->pLines);

    }


    public function init():void
    {



    }

    public function checkIfWon():bool
    {
        return true;
    }

    public function drawGame():string
    {
        $this->game = '';


        return $this->game;
    }

    public function randomAdvance():void
    {



    }


}

$newGame = new ratRace(['X','Y','Z']);

$newGame->init();
//echo $newGame->drawGame();

