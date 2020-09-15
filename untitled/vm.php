<?php
$tilpums= readline("Ievadi degvielas tilpumu: \n");

// paterins 7L/100km

$attalums = ceil($tilpums / 7 * 100);

echo "Tu vari nobraukt ".$attalums." km\n";

$uz1km = 7 / 100;
$paterins = 0;
$nobraukts = 0;
echo "Uz vienu kilometru norbauksi ". $uz1km. " L\n";


while($attalums != 0){
    sleep(1);
    $nobraukts++;
    $paterins = $nobraukts * $uz1km;
    echo "Nobraukts ir $nobraukts km, patērēts ir $paterins L\n";

    $attalums--;
}