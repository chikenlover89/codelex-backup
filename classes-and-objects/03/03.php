<?php

include_once 'FuelGauge.php';
include_once 'Odometer.php';

$audiOdoemeter = new Odometer(999950);
$audiFuel = new FuelGauge(6);

//drive 100km
for ($i = 0; $i < 100; $i++) {

    if ($audiFuel->getFuel() > 0) {
        echo $audiOdoemeter->ride1km($audiFuel) . "KM " . $audiFuel->getFuel() . "L\n";
    } else {
        echo "out of fuel!\n";
        break;
    }
}