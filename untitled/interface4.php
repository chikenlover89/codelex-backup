<?php

interface Animal
{
    public function returnChance(): int;
}

class Giraffe implements Animal
{
    private int $chance = 20;

    public function returnChance(): int
    {
        return $this->chance;
    }
}

class Cow implements Animal
{
    private int $chance = 20;

    public function returnChance(): int
    {
        return $this->chance;
    }
}

class Alligator implements Animal
{
    private int $chance = 70;

    public function returnChance(): int
    {
        return $this->chance;
    }
}

class Behemot implements Animal
{
    private int $chance = 70;

    public function returnChance(): int
    {
        return $this->chance;
    }
}


class AnimalCollection
{

    public array $animalz = [];

    public function add(Animal $animal): void
    {
        $this->animalz[] = $animal;
    }

    public function all(): array
    {
        return $this->animalz;
    }
}

$AnimalC = new AnimalCollection();
$AnimalC->add(new Cow());
$AnimalC->add(new Giraffe());
$AnimalC->add(new Alligator());
$AnimalC->add(new Behemot());

foreach ($AnimalC->all() as $animal) {
    $s = rand(1,100);
    if($s > $animal->returnChance()){
        echo "Annie surrvived ".get_class($animal)."\n";
    }else{
        echo "Annie died from ".get_class($animal)."\n";
        break;
    }
}