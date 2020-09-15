<?php

$mini = rand(1,100);
$skaitlis = readline("Mini ciparu no 1 - 100: \n");



while($mini != $skaitlis){

    if($skaitlis < $mini){
        echo "Par maz!\n";
    } else {
        echo "Par daudz\n";
    }
    $skaitlis = readline("Mini atkal:\n");
}

echo "PAREIZI!\n";

