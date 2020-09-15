<?php

$int1 = 1;
$int2 = 10;
$fact = 1;

for($i = $int1; $i<$int2+1;$i++){

    $fact *= $i;
    //echo "$i\n";

}

echo "$fact\n";