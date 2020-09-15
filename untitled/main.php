<?php

error_reporting(E_ALL ^ E_WARNING);

/// 01 uzdevumi
$newInt = 10;
$newFloat = 10.10;
$newString = 'Hello World';

//1
echo "1.1\n";
var_dump($newInt,$newFloat,$newString);
echo "\n";


//2
echo "1.2\n";
echo "$newInt $newFloat $newString";
echo "\n\n";

//3
echo "1.3\n";
echo $newInt .' '. $newFloat.' '.$newString.' ';
echo "\n\n";





/// 02 uzdevumi

//1
echo "2.1\n";
$newString2 = '10';
if($newString2 === $newInt){ // == true === false
    echo 'true';
} else{
    echo 'false';
}
echo "\n\n";

//2
echo "2.2\n";
$newInt2 = 50;
if($newInt2 > 1 && $newInt2 < 100){
    echo 'true';
}else{
    echo 'false';
}
echo "\n\n";

//3
echo "2.3\n";
$newString3 = 'hello';
if($newString3 == 'hello'){
    echo $newString3.' world';
}
echo "\n\n";

//4
echo "2.4\n";
if($newInt2 > 10 && $newInt2 < 70 && $newInt2 != 100){
    echo '3 checks pass';
}
echo "\n\n";

//5
echo "2.5\n";
$y = 20;
$z = 100;

if($newInt2 > $y && $newInt2 < $z){
    echo 'correct';
}
echo "\n\n";

//6
echo "2.6\n";
$plateNumber = "HZ4849";

switch($plateNumber){
    case "XC3300":
        echo "ņot yout car";
        break;

    case  "HZ4849":
        echo "your car";
        break;
}

echo "\n\n";

//7
echo "2.7\n";

$intByChoice = 56;

switch($intByChoice){
    case $intByChoice <= 50:
            echo "low";
        break;
    case $intByChoice > 50 && $intByChoice < 100:
            echo "medium";
        break;
    case $intByChoice > 100:
            echo "high";
        break;
}

echo "\n\n";



/// 03 uzdevumi

//1
echo "3.1\n";
$newArray = [1, 1, 1];
echo array_sum($newArray);
echo "\n\n";

//2
echo "3.2\n";
$person = [
    "name" => "John",
    "surname" => "Doe",
    "age" => 50
];

var_dump($person[name],$person[surname],$person[age]);
echo "\n\n";

//3
echo "3.3\n";
$person = new stdClass();
$person->name = "John";
$person->surname = "Doe";
$person->age = 50;

var_dump($person->name,$person->surname,$person->age);
echo "\n\n";

//4
echo "3.4\n";

$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][0][name].' '.$items[0][0][surname].' '.$items[0][0][age];
echo "\n\n";

//5
echo "3.5\n";
$items = [
    [
        [
            "name" => "John",
            "surname" => "Doe",
            "age" => 50
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => 41
        ]
    ]
];

echo $items[0][0][name].' & '.$items[0][1][name].' '.$items[0][0][surname];
echo "'s";
echo "\n\n";




/// 04 uzdevumi

//1
echo "4.1\n";
$intArr = [1,2,3];

foreach($intArr as $item){
    echo $item . PHP_EOL;
}
echo "\n\n";

//2
echo "4.2\n";
for($i = 0; $i < count($intArr);$i++){
    echo $intArr[$i] . PHP_EOL;
}
echo "\n\n";

//3
echo "4.3\n";
$x = 1;

while($x < 10){
    echo 'codelex' . PHP_EOL;
    $x++;
}
echo "\n\n";

//4
echo "4.4\n";
$nonAssArr = [1,2,3,4,5,6];
for($i = 0;$i<count($nonAssArr);$i++){
    if($nonAssArr[$i]%3 == 0){
        echo $nonAssArr[$i] . PHP_EOL;
    }
}
echo "\n\n";

//5
echo "4.5\n";

$items = [
    [
        [
            "name" => "Aivars",
            "surname" => "Silis",
            "age" => "31",
            "birthday" => "29.05.1989"
        ],
        [
            "name" => "Jane",
            "surname" => "Doe",
            "age" => "30",
            "birthday" => "29.04.1990"
        ]
    ]
];
$i = 0;
for($i = 0;$i < count($items[0]); $i++) {
    echo $items[0][$i][name] . ' ' . $items[0][$i][surname] . ' ' . $items[0][$i][age] . ' ' . $items[0][$i][birthday].PHP_EOL;
}
echo "\n\n";

///05 uzdevumi

//01
echo "5.1\n";

function plusCodelex($inStr){
    echo "$inStr codelex;";
}

plusCodelex('hello');

echo "\n\n";

//02
echo "5.2\n";

function multiply($int1,$int2){
    echo $int1 + $int2;
}

multiply(2,2);

echo "\n\n";

//03

echo "5.3\n";

$personX = new stdClass();
$personX->age = 17;
$personX->name = 'Aivars';
$personX->surname = 'Silis';

function detAge($personz){

if($personz->age >= 18){
    echo 'adult';
} else{
    echo 'ņot adult';
}
}
detAge($personX);

echo "\n\n";

//04
echo "5.4\n";

$john = new stdClass();
$john->age = 1;
$john->name = 'John';

$jane = new stdClass();
$jane->age = 28;
$jane->name = 'Jane';

$persons = [];
$persons[] = $john;
$persons[] = $jane;

function detAgeInArr($arr){

    foreach($arr as $i){
        if($i->age >= 18){
          echo "adult\n";
        } else {
            echo "not adult \n";
        }

    }

}

detAgeInArr($persons);

echo "\n\n";

//05
echo "5.5\n";

$fruit = [
    [
        [
            "name" => "Apples",
            "weight" => 5

        ],
        [
            "name" => "Oranges",
            "weight" => 12

        ],
        [
            "name" => "Potatos",
            "weight" => 100

        ]
    ]
];

$costs = [
    [
        'name' => 'S',
        'price' => 1
    ],
    [
        'name' => 'M',
        'price' => 2
    ]
];

function detShpCst($prd,$prc){

    foreach($prd[0] as $item){

        if($item['weight'] > 10){
            echo $item['name']." are heavy. shipping cost is ".$prc[1]['price']." EUR.\n";
        } else{
            echo $item['name']." are not heavy. shipping cost is ".$prc[0]['price']." EUR.\n";
        }

    }

}

detShpCst($fruit,$costs);
echo "\n";

//06
echo "5.6\n";

$arr2 = [1,2,3,4.05,'haha'];

foreach($arr2 as $index){
    if(is_int($index)){
        echo ($index*2)."\n";
    }else {
        echo $index."\n";
    }
}

// declare strict type lai neparveido stringus integerus patvaligi
//declare(strict_types = 1);

//function paint(string color):string // void //alt + enter salabo sarkanos
//{
//    return 100;
//}

//$x = (int)'100'; //typecast parveido uz int

//function random(&$variable){...} atsauce uz konkreto mainigo jeb pointeris

//https://git.codelex.io/learn/php-syllabus/-/tree/master/php-basics
// 1 2 5 6 mapes, 2 nedelu laika 19.datums