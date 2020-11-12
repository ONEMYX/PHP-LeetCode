<?php

class Solution
{

    /**
     * @param Integer[] $A
     * @return Integer[]
     */
    function sortArrayByParityII ( array $A )
    {
        $odd  = 1;
        $even = 0;
        $arr  = [];
        foreach ($A as $value) {
            if (( $value % 2 ) == 0) {
                $arr[ $even ] = $value;
                $even         += 2;
            } else {
                $arr[ $odd ] = $value;
                $odd         += 2;
            }
        }
        var_dump($arr);
        ksort($arr);
        return $arr;
    }
}


$typed = [ 4, 2, 5, 7 ];
//$typed = [ 3, 1, 4, 2 ];
$adn   = new Solution();
//p(num_and($arr,$num));
var_dump( $adn->sortArrayByParityII( $typed ) );