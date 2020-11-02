<?php

class DogTest
{
    private array $dogs;

    public function __construct(array $dogs)
    {
        $this->dogs = $dogs;
    }

    public function getDogs(): array
    {
        return $this->dogs;
    }

    public function setDogs(array $dogs): void
    {
        $this->dogs = $dogs;
    }

    public function printDogs(): string
    {
        $dogz = '';
        foreach ($this->dogs as $dog) {
            $dogz .= $dog->getName() . ", " . $dog->getSex()."\n";
        }

        return $dogz;
    }


}