<?php

class Car{
    private string $type;
    private float $maxFuel;
    private string $plateNumber;
    private int $milage = 0;

    private array $carTypes = ['Audi', 'MoreAudi', 'Opel'];
    private string $printOut='';
    private array $carPin = ['111', '222', '333'];
    private int $index;
    private bool $unlocked = false;

    public function __construct(float $maxFuel, string $plateNumber)
    {
        $this->maxFuel = $maxFuel;
        $this->plateNumber = $plateNumber;
    }


    public function drive10km(){
        if($this->unlocked == true) {
            $this->maxFuel -= 0.7;
            $this->milage += 10;
        }
    }

    public function getType(){
        return $this->type;
    }

    public function getMaxFuel(){
        return $this->maxFuel;
    }

    public function getPlateNumber(){
        return $this->plateNumber;
    }

    public function getMilage(){
        return $this->milage;
    }

    public function getStatus(){
        return $this->unlocked;
    }

    public function printChoice(){

        for($i=0;$i<count($this->carTypes);$i++){
            $this->printOut .= $i." ".$this->carTypes[$i]."\n";
        }
        return $this->printOut;
    }

    public function setChoice($choice){
        $this->type = $this->carTypes[$choice];
        $this->index = $choice;
    }

    public function enterPin($code){

        if($code == $this->carPin[$this->index]){
            $this->unlocked = true;
            return "Car is unlocked!\n";
        }else{
            return "Wrong pin!\n";
        }

    }
}

$newCar = new Car(50.5,"XZ1234");

/*
while($newCar->getMaxFuel() > 0){

    echo $newCar->getMaxFuel()." ".$newCar->getPlateNumber()." ".$newCar->getMilage()."\n";
    $newCar->drive10km();

}
*/

echo "Choose your car!\n";
echo $newCar->printChoice();
$newCar->setChoice(readline("Set your choice: \n"));
echo "Your car is: ".$newCar->getType()."\n";
echo $newCar->enterPin(readline("Enter pin: "));

if($newCar->getStatus()) {

    while ($newCar->getMaxFuel() > 0) {

        echo "Type: ".$newCar->getType()." Fuel: ".$newCar->getMaxFuel() . " Plate Number:" . $newCar->getPlateNumber() . " Milage: " . $newCar->getMilage() . "\n";
        $newCar->drive10km();

    }
}