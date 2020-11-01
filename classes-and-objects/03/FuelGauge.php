<?php

class FuelGauge
{
    private int $fuel;

    public function __construct(int $fuel)
    {
        $this->fuel = $fuel;
    }

    public function getFuel(): int
    {
        return $this->fuel;
    }

    public function setFuel(int $fuel): string
    {
        if ($fuel > 70 || $fuel < 0) {
            return 'error';
        } else {
            $this->fuel = $fuel;
        }
        return 'ok';
    }

    public function consumeOrFill(string $do): string
    {
        if ($this->fuel >= 70) {
            return 'tank full';
        } elseif ($this->fuel <= 0) {
            return 'out of fuel';
        } else {
            if ($do == '++') {
                $this->fuel++;
            }
            if ($do == '--') {
                $this->fuel--;
            }
        }
        return 'ok';
    }


}
