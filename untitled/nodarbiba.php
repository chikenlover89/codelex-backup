<?php

class Person{

    // ?string ja datu tips var but ari null

    public string $name;  //private vai protected pec tam nevares nomainit no arpuses
    // __ php iebuvetas funckijas klasei
    public function __construct(string $name){
        //var_dump("__ construct was called\n");
        $this->name = $name;
    }

    public function name(string $name){ // sadi var uzjautat mainit private / protected mainogos
        $this -> name = $name;
    }
}

$person = new Person('Jānis');
var_dump($person);
$person::name(Džons);
var_dump($person);

$person2 = new Person('Ilze');
var_dump($person2);