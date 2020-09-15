<?php
$int_split = [];
$int = readline("Positive integer: \n");
if($int < 0 ){
    echo "error - integer has to be positive!\n";
}else{
    $int_split= str_split($int);
    echo "Integer has ".count($int_split)." digits\n";
}




