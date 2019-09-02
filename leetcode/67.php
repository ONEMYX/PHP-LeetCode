<?php
class Solution {

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b) {
        $aSize = strlen($a);
        $bSize = strlen($b);
        while ($aSize>$bSize){
            $b = '0'.$b;
            ++$bSize;
        }
        while ($aSize<$bSize){
            $a = '0'.$a;
            ++$aSize;
        }
        for ($i = $aSize-1;$i>=0;$i--){
            $a{$i} =$a{$i}+$b{$i};
            if ($i!=0){
                if ($a{$i} > 1) {
                    $a{$i} = $a{$i} % 2;
                    $a{$i - 1} = $a{$i - 1} + 1;
                }
            }else{
                if ($a{$i}>1){
                    $a{$i} = $a{$i}%2;
                    $a = '1'.$a;
                }
            }
        }
        return $a;
    }
}

$a ="11";
$b ="1";
//$a = "10100000100100110110010000010101111011011001101110111111111101000000101111001110001111100001101";
//$b = "110101001011101110001111100110001010100001101011101010000011011011001011101111001100000011011110011";
$Solution = new Solution();
$argc = $Solution->addBinary($a,$b);
var_dump($argc);