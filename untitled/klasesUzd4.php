<?php

abstract class Shape{


    public abstract function calcArea():float; //child klasēm obligāti jauztaisa tieši šāda funckija

    public function getName():string
    {
        return get_class($this);
    }


}

class Square extends Shape{

    private float $side1;
    private float $side2;
    private float $area;

    public function __construct(float $side1,float $side2)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    public function calcArea():float
    {

        $this->area = $this->side1*$this->side2;
        return $this->area;
    }

}

class Triangle extends Shape{

    private float $side1;
    private float $side2;
    private float $area;

    public function __construct(float $side1,float $side2)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
    }

    public function calcArea():float
    {

        $this->area = $this->side1*$this->side2/2;
        return $this->area;
    }

}

class Circle extends Shape{

    private float $radius;
    private float $area;

    public function __construct(float $radius)
    {
        $this->radius = $radius;

    }

    public function calcArea():float
    {

        $this->area = 3.14*pow($this->radius,2);
        return $this->area;
    }

}

class ShapeCollection{

    private array $shapes = [];

    public function add(Shape $shape):void   ///obligāte jābut Shape piem Circle ir Shape no mantošanas
    {
        $this->shapes[] = $shape;
    }

    public function all():array
    {
        return $this->shapes;
    }

}

/*
$newSquare = new Square(2,2);
$newTriangle = new Triangle(4.5,2);
$newCircle = new Circle(1);

echo $newSquare->getName()."\n";
echo $newSquare->calcArea()."\n";

echo $newTriangle->getName()."\n";
echo $newTriangle->calcArea()."\n";

echo $newCircle->getName()."\n";
echo $newCircle->calcArea()."\n";
*/

$shapes = new ShapeCollection();

$shapes->add(new Circle(1));
$shapes->add(new Square(3,4));
$shapes->add(new Triangle(2,4));

foreach($shapes->all() as $shape){
    echo $shape->getName()." ".$shape->calcArea()."\n";
}
