<?php

include_once 'Dog.php';
include_once 'DogTest.php';

$dogs=[
    new Dog('Max','male','Rocky','Lady'),
    new Dog('Rocky','male','Sam','Molly'),
    new Dog('Sparky','male','Rocky','Lady'),
    new Dog('Buster','male','Sparky','Lady'),
    new Dog('Sam','male'),
    new Dog('Lady','female'),
    new Dog('Molly','female'),
    new Dog('Coco','female','Buster','Molly')
    ];

$dogTest = new DogTest($dogs);

echo $dogTest->printDogs();
echo var_export((new Dog('Sparky','male','Rocky','Lady'))->hasSameMother(new Dog('Max','male','Rocky','Lady')))."\n";
echo var_export((new Dog('Sam','male'))->hasSameMother(new Dog('Max','male','Rocky','Lady')))."\n";