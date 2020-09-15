<?php

$num2guess = rand(1,100);
echo "$num2guess\n";

echo "I'm thinking of a number between 1-100.  Try to guess it.\n";
$numGuessed = readline();

if($numGuessed>$num2guess){

    echo "Sorry, you are too high.  I was thinking of $num2guess.\n";

}elseif($numGuessed<$num2guess){
    echo "Sorry, you are too low.  I was thinking of $num2guess.\n";
}elseif(($numGuessed==$num2guess)){
    echo "You guessed it!  What are the odds?!?\n";
}
