<?php


$input = str_split(strtolower(readline("Input string: \n")));
$button_numbers = '';

//var_dump($input);

for($i = 0;$i<count($input);$i++){

    if($input[$i] == 'a' || $input[$i] == 'b' || $input[$i] == 'c'){
        $button_numbers = $button_numbers.'2';
    }elseif($input[$i] == 'd' || $input[$i] == 'e' || $input[$i] == 'f'){
        $button_numbers = $button_numbers.'3';
    }elseif($input[$i] == 'g' || $input[$i] == 'h' || $input[$i] == 'i'){
        $button_numbers = $button_numbers.'4';
    }elseif($input[$i] == 'j' || $input[$i] == 'k' || $input[$i] == 'l'){
        $button_numbers = $button_numbers.'5';
    }elseif($input[$i] == 'm' || $input[$i] == 'n' || $input[$i] == 'o'){
        $button_numbers = $button_numbers.'6';
    }elseif($input[$i] == 'p' || $input[$i] == 'q' || $input[$i] == 'r' || $input[$i] == 's'){
        $button_numbers = $button_numbers.'7';
    }elseif($input[$i] == 't' || $input[$i] == 'u' || $input[$i] == 'v'){
        $button_numbers = $button_numbers.'8';
    }elseif($input[$i] == 'w' || $input[$i] == 'x' || $input[$i] == 'y' || $input[$i] == 'z'){
        $button_numbers = $button_numbers.'9';
    }else{
        $button_numbers = "Invalid input! \n";
        break;
    }

}

echo "Keypad digits: ".$button_numbers."\n";
