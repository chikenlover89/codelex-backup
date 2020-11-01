<?php

class Animal{

    private int $name;
    private int $weight;

    public function __construc(int $weight,string $name){
        $this->name = $name;
        $this->weight = $weight;
    }

    public function name():string
    {
        return $this->name;
    }

    public function weight():string
    {
        return $this->weight;
    }

}

class Turtle extends Animal{

    private string $nickname;

    public function __construc(int $weight, string $name, string $nickname)
    {
        parent::__construc($weight, $name);
        $this->nickname = $nickname;
    }

    public function weight():int
    {
        $weight = parent::weight();
        return $weight*1.5;
    }

    public function nickname():string
    {
        return $this->nickname;
    }



}

$animal = [

    new Animal(100,"Džeris"),
    new Turtle(1000,"Bruņa")

];