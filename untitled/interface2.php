<?php

interface CanPutVegetable{

}

interface CanPutFruit{

}

class Apple implements CanPutFruit{}
class Potatoe implements CanPutVegetable {}
class Pea implements CanPutVegetable {}

class Basket{

    public array $vegetables = [];
    public array $fruits = [];

    public function addVegetable(CanPutVegetable $item):void
    {
        $this->vegetables[] = $item;
    }
    public function addFruit(CanPutFruit $item1):void
    {
        $this->fruits[] = $item1;
    }
}

$basket = new Basket();
$basket->addVegetable(new Potatoe());
$basket->addVegetable(new Pea());
//$basket->addVegetable(new Apple());
//$basket->addFruit(new Pea());
