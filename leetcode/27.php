<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $val
     *
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        $i=0;
        foreach ($nums as $value) {
            if ($value != $val) {
                $nums[$i] = $value;
                $i++;
            }
        }
        return $i;
    }
}

$nums     = [3, 2, 2, 3];
$nums =[0,1,2,2,3,0,4,2];
$val      = 3;
$val =2;
$solution = new Solution();
$num      = $solution->removeElement( $nums, $val );

var_dump( $num, $nums );
