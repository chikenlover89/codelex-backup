<?php

echo "\nThis program will check if number is odd or even, insert q to quit!\n";
$var = "not q";

while($var != "q"){

    $var = readline("Insert number: \n");

    if(is_numeric($var)) {
        if ($var % 2 == 0) {
            echo "ODD\n";
        } else {
            echo "EVEN\n";
        }
    }
}

echo "bye!\n";