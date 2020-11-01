<?php


class Odometer
{
    private int $mileage;

    public function __construct(int $mileage)
    {
        $this->mileage = $mileage;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function setMileage(int $mileage): void
    {
        $this->mileage = $mileage;
        if ($this->mileage > 999999) {
            $this->mileage -= 1000000;
        }
    }

    public function ride1km(FuelGauge $gauge): string
    {
        if ($this->mileage > 999999) {
            $this->mileage -= 1000000;
        }
        $this->mileage++;


        if ($this->mileage % 10 == 0) {
            $gauge->consumeOrFill('--');
        }

        return $this->mileage;
    }


}
