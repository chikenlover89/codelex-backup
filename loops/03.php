<?php

$word1 = readline("Enter first word: \n");
$word2 = readline("Enter second word: \n");

$l1 = strlen($word1);
$l2 = strlen($word2);

$dots = 30 - $l1 - $l2;

echo $word1;
for($i = 0; $i < $dots;$i++){

    echo ".";

}
echo $word2."\n";

