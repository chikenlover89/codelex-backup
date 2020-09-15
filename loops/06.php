<?php

$inputHeight = readline("Enter size class constant: ");

class AsciiFigure{

    public static function pyramid($height){

        $pyr = '';
        $baseNumber = 8*($height-1);

        $starsNumber = 0;
        $lidNumber = $baseNumber - $starsNumber;
        $cycles = $height;

        while($cycles > 0) {

            for ($i = 0; $i < $lidNumber / 2; $i++) {
                $pyr = $pyr . '/';
            }
            for ($i = 0; $i < $starsNumber; $i++) {
                $pyr = $pyr . '*';
            }
            for ($i = 0; $i < $lidNumber / 2; $i++) {
                $pyr = $pyr . '\\';
            }
            $pyr = $pyr . "\n";

            $starsNumber += 8;
            $lidNumber = $baseNumber - $starsNumber;

            $cycles--;
        }

        return $pyr;
    }


}

echo AsciiFigure::pyramid($inputHeight);