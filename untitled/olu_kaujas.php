<?php

$olasManStr = readline('Ievadi savu olu skaitu: ');
$olasPC = rand(5,15);
echo "Tavs olu skaits ir $olasManStr\n";
echo "PC olu skaits ir $olasPC\n";
echo "Sākas olu kauja!\n\n";


$olasMan = intval($olasManStr);
$kauja = 0;
$manaUzvara = 0;
$PCuzvara = 0;

while($olasPC > 0 && $olasMan > 0){

    $res = rand(0,1);
    sleep(1);

    if($res == 0){
        $olasPC--;
        $kauja++;
        $manaUzvara++;
        echo "Tu uzvari $kauja. cīņu!\n";

    }else{
        $olasMan--;
        $kauja++;
        $PCuzvara++;
        echo "PC uzvar $kauja. cīņu!\n";
    }
}

echo "\nTu uzvarēji $manaUzvara reizes!\n";
echo "PC uzvarēja $PCuzvara reizes!\n";

if($olasMan> $olasPC){
    echo "\nTU UZVARI ar $olasMan olām!\n";
}else {
    echo "\nPC UZVAR ar $olasPC olām! :(\n";
}



