<?php

class persona{

    private string $name;
    private string $surname;
    private string $sname;

    public function getName(){
        return $this->name;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function getSname(){
        return $this->sname;
    }

    public function setName(string $name){
        return $this->name = $name;
    }
    public function setSurname(string $surname){
        return $this->surname = $surname;
    }
    public function setSname(string $ssname){
        return $this->sname = $ssname;
    }

}

$persona1 = new persona;
$persona1->setName('Janis');
$persona1->setSurname('Smits');
$persona1->setSname('Maigais');

$persona2 = new persona;
$persona2->setName('Janis');
$persona2->setSurname('Kalnins');
$persona2->setSname('');

$persona3 = new persona;
$persona3->setName('Aivars');
$persona3->setSurname('Silis');
$persona3->setSname('');

echo $persona1->getSname()." ".$persona1->getSurname()."\n";
echo $persona2->getSname()." ".$persona2->getSurname()."\n";
echo $persona3->getSname()." ".$persona3->getSurname()."\n";