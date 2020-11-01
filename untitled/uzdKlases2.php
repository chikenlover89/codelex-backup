<?php


class Car
{

    private string $name;
    private int $capacity;

    public function __construct(int $capacity, string $name)
    {
        $this->name = $name;
        $this->capacity = $capacity;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function capacity(): int
    {
        return $this->capacity;
    }

}

class Audi extends Car
{

    private string $spoiler;

    public function __construct(int $capacity, string $name, string $spoiler)
    {
        parent::__construct($capacity, $name);
        $this->spoiler = $spoiler;
    }


    public function spoiler(): string
    {
        return $this->spoiler;
    }


}

class Volvo extends Car
{

    private string $safety;

    public function __construct(int $capacity, string $name, string $safety)
    {
        parent::__construct($capacity, $name);
        $this->safety = $safety;
    }


    public function safety(): string
    {
        return $this->safety;
    }


}

$car1 = new Audi(50,'Darling','Yes');
$car2 = new Volvo(60,'Beast','TOP');

$cars = [
$car1,
$car2
    ];

//var_dump($car1,$car2);

foreach($cars as $item) {

    if ($item instanceof Audi) {

        echo $item->name()." ".$item->spoiler()." ".$item->capacity()."\n";

    }
    if($item instanceof Volvo){
        echo $item->name()." ".$item->safety()." ".$item->capacity()."\n";
    }
}
