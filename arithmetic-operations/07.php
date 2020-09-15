<?php

$t = 10;
//asnwer = -490.5m

//calculate fall distance for an object.   fallTime in seconds, startSpeed in meters per second, $startPos in meters

function gravity(float $fallTime, float $startSpeed, $startPos):float{

    $distance = 0.5 * (-9.81)*pow($fallTime,2) + $startSpeed * $fallTime + $startPos;

    return $distance;
}


echo gravity($t, 0,0)."\n";