<?php

class Solution
{

    /**
     * @param Integer $rowIndex
     *
     * @return Integer[]
     */
    function getRow($rowIndex)
    {
        $row=$rowIndex+1;
        $arr = [];
        for ($i = 0; $i < ceil( $row / 2 ); $i++) {
            $size = $rowIndex;
            $a    = 1;
            for ($j = $i; $j > 0; $j--) {
                $a = $a * $size;
                $size--;
            }
            $b    = 1;
            $size = 1;
            for ($j = $i; $j > 0; $j--) {
                $b = $b * $size;
                $size++;
            }
            $arr[] = $a / $b;
        }
        if ($row%2){
            $temp = [array_pop($arr)];
            $arr = array_merge($arr,$temp,array_reverse($arr));
        }else{
            $arr = array_merge($arr,array_reverse   ($arr));
        }
        return $arr;
    }
}


$numRows  = 5;
$numRows  = 3;
$solution = new Solution();
$list     = $solution->getRow( $numRows );
var_dump( $list );