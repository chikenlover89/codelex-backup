<?php

class Dog
{
    private string $name;
    private string $sex;
    private ?string $mother;
    private ?string $father;

    public function __construct(string $name, string $sex, ?string $father = 'Unknown', ?string $mother = 'Unknown')
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSex(): string
    {
        return $this->sex;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setSex(string $sex): void
    {
        $this->sex = $sex;
    }

    public function getFather(): string
    {
        return $this->father;
    }

    public function getMother(): string
    {
        return $this->mother;
    }

    public function setFather(string $father): void
    {
        $this->father = $father;
    }

    public function setMother(string $mother): void
    {
        $this->mother = $mother;
    }

    public function hasSameMother(Dog $otherDog):bool
    {
        if($otherDog->getMother() == $this->mother){
            return true;
        }
        return false;
    }

}

