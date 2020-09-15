<?php

$rpsIn = readline('Choose rock, paper or scissors: ');
echo "\n";
echo "You chose $rpsIn \n";

$rpsPCint = rand(1, 3);
$rpsPC = '';

//echo "\n $rpsPCint";

if($rpsPCint == 1){
    $rpsPC = 'ŗock';
}else if($rpsPCint == 2){
    $rpsPC = 'paper';
} else {
    $rpsPC = 'scissors';
}

echo "PC chose $rpsPC \n";

if($rpsIn == 'rock'){
    if($rpsPC == 'ŗock'){
        echo "It is a TIE";
    }else if($rpsPC == 'paper'){
        echo "PC WINS!";
    }else{
        echo "YOU WIN!";
    }

}else if($rpsIn == 'paper'){
    if($rpsPC == 'ŗock'){
        echo "YOU WIN!";
    }else if($rpsPC == 'paper'){
        echo "It is a TIE";
    }else{
        echo "PC WINS!";
    }
}else if($rpsIn == 'scissors'){
    if($rpsPC == 'ŗock'){
        echo "PC WINS!";
    }else if($rpsPC == 'paper'){
        echo "YOU WIN!";
    }else{
        echo "It is a TIE";
    }
}else{
    echo "FAIL!";
}

echo "\n";