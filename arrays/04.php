<?php

$arr1 = [];
for($i = 0;$i<10;$i++){
    $arr1[$i] = rand(1,100);
}

$arr2 = $arr1;

echo "Array 1: ";
foreach($arr1 as $el){
    echo "$el ";
}
echo "\n";

echo "Array 2: ";
foreach($arr2 as $el){
    echo "$el ";
}
echo "\n";

//var_dump($arr1);