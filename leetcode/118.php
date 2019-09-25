<?php

class Solution
{

    /**
     * @param Integer $numRows
     *
     * @return Integer[][]
     */
    function generate($numRows)
    {
        if ($numRows==0){
            return [];
        }
        switch ($numRows) {
            case 1:
                $arr = [[1]];
                break;
            case 2:
                $arr = [[1], [1, 1]];
                break;
            default:
                $arr = [[1], [1, 1]];
                for ($i = 3; $i <= $numRows; $i++) {
                    $temp = [];
                    for ($j = 0; $j < $i; $j++) {
                        switch ($j) {
                            case 0;
                            case $i - 1;
                                $temp[] = 1;
                                break;
                            default:
                                $temp[] = $arr[$i - 2][$j] + $arr[$i - 2][$j - 1];
                        }
                    }
                    $arr[] = $temp;
                }
        }
        return $arr;
    }
    function one($numRows){
        $arr = [];
        for ($i = 0; $i < $numRows; $i++) {
            for ($j = 0; $j <= $i; $j++) {
                if ($j == 0 || $j == $i) {
                    $arr[$i][$j] = 1;
                } else {
                    $arr[$i][$j] = $arr[$i - 1][$j] + $arr[$i - 1][$j - 1];
                }
            }
        }
        return $arr;
    }
}

$numRows  = 5;
$solution = new Solution();
$list     = $solution->generate( $numRows );
var_dump( $list );