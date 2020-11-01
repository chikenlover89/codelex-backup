<?php

abstract class Fruit{

    public function getName():string
    {
        return get_class($this);
    }

}

class Orange extends Fruit{



}

class Apple extends Fruit{



}

class Banana extends Fruit{



}

class FruitCollection{

    private array $fruitsArr = [];

    public function add(Fruit $oneFruit):void   ///obligāte jābut Shape piem Circle ir Shape no mantošanas
    {
        $this->fruitsArr[] = $oneFruit;
    }

    public function all():array
    {
        return $this->fruitsArr;
    }

}

$fruits = new FruitCollection();

$fruits->add(new Orange());
$fruits->add(new Apple());
$fruits->add(new Banana());

foreach($fruits->all() as $fruit){
    echo $fruit->getName()."\n";
}
