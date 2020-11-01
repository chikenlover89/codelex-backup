<?php
interface ShapeInterface
{
   public function getArea():float;
}

interface RandomInterface
{
    public function wtf():float;
}

class Square implements ShapeInterface
{
    public function getArea(): float
    {
        return 10.1;
        // TODO: Implement getArea() method.
    }
}

class Circle implements ShapeInterface{

    public function getArea(): float
    {
        return 15;
        // TODO: Implement getArea() method.
    }
}

class Whaat implements ShapeInterface,RandomInterface{
    public function getArea(): float
    {
        // TODO: Implement getArea() method.
    }
    public function wtf(): float
    {
        // TODO: Implement wtf() method.
    }

}

$square = new Square();
$circle = new Circle();