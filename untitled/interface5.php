<?php

interface Pilseta{
    public function mersIr():string;
}

class Valmiera implements Pilseta{

    private string $mayor = 'Gailits';
    public function mersIr(): string
    {
        return $this->mayor;
    }
}

class Vilkene implements Pilseta{

    private string $mayor = '';
    public function mersIr(): string
    {
        return $this->mayor;
    }
}

class Rīga implements Pilseta{

    private string $mayor = 'Ušakovs';
    public function mersIr(): string
    {
        return $this->mayor;
    }
}

class Valsts{

    private array $pilsetas = [];

    public function pielikt(Pilseta $jauna):void{
        $this->pilsetas[] = $jauna;
    }
    public function visas():array{
        return $this->pilsetas;
    }
}

$valsts = new Valsts();
$valsts->pielikt(new Valmiera());
$valsts->pielikt(new Vilkene());
$valsts->pielikt(new Rīga());


foreach ($valsts->visas() as $pilseta) {

    if($pilseta->mersIr() != ''){
        echo get_class($pilseta)."s mērs ir ".$pilseta->mersIr()."\n";
    }else{
        echo get_class($pilseta)."i mērs nav \n";

    }
}