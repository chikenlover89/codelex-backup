<?php
$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

function calculateEnergyDrinkers(int $numberSurveyed, float $purchasedEnergyDrinks)
{
    return round($numberSurveyed * $purchasedEnergyDrinks);
}


function calculatePreferCitrus(int $leftover, float $preferredCitrus)
{
    return round($leftover * $preferredCitrus);
}


echo "Total number of people surveyed " . $surveyed."\n";
echo "Approximately " . calculateEnergyDrinkers($surveyed, $purchased_energy_drinks) . " bought at least one energy drink\n";
echo calculatePreferCitrus(calculateEnergyDrinkers($surveyed, $purchased_energy_drinks), $prefer_citrus_drinks) . " of those " . "prefer citrus flavored energy drinks.\n";

