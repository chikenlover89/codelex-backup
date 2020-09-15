<?php

for($i = 0;$i<(110+1);$i++){

    if ($i % 3 ==0 && $i % 5 == 0){
        echo "CozaLoza ";
    }elseif($i % 3 == 0){
        echo "Coza ";
    }elseif($i % 5 == 0){
        echo "Loza ";
    }elseif ($i % 7 ==0){
        echo "Woza ";
    }else{
        echo "$i ";
    }

    if($i % 11 == 0){
    echo "\n";
    }

}