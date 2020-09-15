<?php

$dayNumber = 6;

if($dayNumber < 0 || $dayNumber > 6){
    echo "error - invalid day number\n";
}else{

    switch($dayNumber){
        case 0;
        echo "Monday\n";
        break;
        case 1;
        echo "Tuesday\n";
        break;
        case 2;
        echo "Wednesday\n";
        break;
        case 3;
        echo "Thursday\n";
        break;
        case 4;
        echo "Friday\n";
        break;
        case 5;
        echo "Saturday\n";
        break;
        case 6;
        echo "Sunday\n";
        break;
    }

}
