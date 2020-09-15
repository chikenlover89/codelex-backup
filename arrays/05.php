<?php

$ticTacToe = [
            ['-','-','-'],
            ['-','-','-'],
            ['-','-','-']
];
$moves = 9;
$XO = 'X';

$row = 0;
$column = 0;


function translateString(string $inputData,&$out1,&$out2){
    $pieces = explode(" ",$inputData);
    $return = TRUE;

    $out1 = (int)$pieces[0];
    $out2 = (int)$pieces[1];

    if(count($pieces) != 2){
        $return = FALSE;
    }elseif($out1 < 0 || $out1 > 9){
        $return = FALSE;
    }elseif($out2 < 0 || $out2 > 9){
        $return = FALSE;
    }

    return $return;
}

function drawArray($arr){

    echo $arr[0][0]." ".$arr[0][1]." ".$arr[0][2]." \n";
    echo $arr[1][0]." ".$arr[1][1]." ".$arr[1][2]." \n";
    echo $arr[2][0]." ".$arr[2][1]." ".$arr[2][2]." \n";

}

function checkForWinner($arr){

    $winner = "none";
    //row
    if($arr[0][0] == $arr[0][1] && $arr[0][1] == $arr[0][2] && $arr[0][0] != "-"){
        $winner = "Winner is ".$arr[0][0]." !!!\n";
    }elseif($arr[1][0] == $arr[1][1] && $arr[1][1] == $arr[1][2] && $arr[1][0] != "-"){
        $winner = "Winner is ".$arr[1][0]." !!!\n";
    }elseif($arr[2][0] == $arr[2][1] && $arr[2][1] == $arr[2][2] && $arr[2][0] != "-"){
        $winner = "Winner is ".$arr[2][0]." !!!\n";
    }

    //column
    if($arr[0][0] == $arr[1][0] && $arr[1][0] == $arr[2][0] && $arr[0][0] != "-"){
        $winner = "Winner is ".$arr[0][0]." !!!\n";
    }elseif($arr[0][1] == $arr[1][1] && $arr[1][1] == $arr[2][1] && $arr[0][1] != "-"){
        $winner = "Winner is ".$arr[0][1]." !!!\n";
    }elseif($arr[0][2] == $arr[1][2] && $arr[1][2] == $arr[2][2] && $arr[0][2] != "-"){
        $winner = "Winner is ".$arr[0][2]." !!!\n";
    }

    //diagonal
    if($arr[0][0] == $arr[1][1] && $arr[1][1] == $arr[2][2] && $arr[0][0] != "-"){
        $winner = "Winner is ".$arr[0][0]." !!!\n";
    }elseif($arr[0][2] == $arr[1][1] && $arr[1][1] == $arr[2][0] && $arr[0][2] != "-"){
        $winner = "Winner is ".$arr[0][2]." !!!\n";
    }

    return $winner;

}



echo "Lets play Tic Tac Toe!\n";
drawArray($ticTacToe);



while($moves != 0) {

    if($moves%2 == 0) {
        $XO = 'X';
    }else{
        $XO = 'O';
    }

    $input = readline("'$XO', choose your location (row, column): ");
    if(translateString($input,$row,$column) == TRUE){

            if($ticTacToe[$row][$column] == "X" || $ticTacToe[$row][$column] == "O"){
                echo "error - try again\n";
                $moves++;
            }else {
                $ticTacToe[$row][$column] = $XO;
                drawArray($ticTacToe);
            }

    }else{
        echo "error - try again\n";
        $moves++;
    }



    if(checkForWinner($ticTacToe) == "none") {
        $moves--;
    }
    else{
        echo checkForWinner($ticTacToe);
        $moves = 0;
    }

    if($moves == 0){
        echo "The game is a tie !!!\n";
    }

}

