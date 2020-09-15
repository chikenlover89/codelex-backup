<?php

$reizes= readline("Cik reizes kompis minēs: \n");
$uzminets = 0;
$min = 1;
$max = 100;
$pedejaisSk = 0;

while($reizes!=0 && $uzminets == 0){


    $miniSk = rand($min,$max);
    if($miniSk == $pedejaisSk){
        $miniSk = rand($min,$max);
    }else{
        $pedejaisSk = $miniSk;
    }

    echo "Vai $miniSk ir pareizi?\n";
    $atbilde = readline("\n");

    if($atbilde == "ja"){
        $uzminets = 1;
        echo "PC uzvar!\n";
    }
    if($atbilde == "vairak"){
        $min = $miniSk;
    }
    if($atbilde == "mazak"){
        $max = $miniSk;
    }


    $reizes--;
}

if($reizes == 0 && $uzminets == 0){
    echo "TU uzvari!\n";
}