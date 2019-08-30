<?php
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $lenA = strlen($a);
        $lenB =strlen($b);
        if ($lenA<10&&$lenB<10){
            return decbin(bindec($a)+bindec($b));
        }else{

        }
    }
}

$a ="11";
$b ="1";
$a = "10100000100100110110010000010101111011011001101110111111111101000000101111001110001111100001101";
$b = "110101001011101110001111100110001010100001101011101010000011011011001011101111001100000011011110011";
$Solution = new Solution();
$argc = $Solution->addBinary($a,$b);
var_dump($argc);