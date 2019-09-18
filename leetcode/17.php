<?php

class Solution
{
    protected $size = [
        '2' => ['a', 'b', 'c'],
        '3' => ['d', 'e', 'f'],
        '4' => ['g', 'h', 'i'],
        '5' => ['j', 'k', 'l'],
        '6' => ['m', 'n', 'o'],
        '7' => ['p', 'q', 'r', 's'],
        '8' => ['t', 'u', 'v'],
        '9' => ['w', 'x', 'y', 'z'],
    ];

    /**
     * @param String $digits
     *
     * @return array
     */
    function letterCombinations($digits)
    {
        $len = strlen( $digits );
        if ($len < 1) {
            return [];
        }
        if ($len <= 1) {
            return $this->size[$digits];
        }
        $arr  = [];
        $str  = substr( $digits, 1 );
        $temp = $this->letterCombinations( $str );
        foreach ($this->size[$digits{0}] as $key => $value) {
            foreach ($temp as $tem) {
                $arr[] = $value . $tem;
            }
        }
        return $arr;
    }
}

$digits = '24';
//$digits = '';
$solu = new Solution();
$B    = $solu->letterCombinations( $digits );

var_dump( $B );