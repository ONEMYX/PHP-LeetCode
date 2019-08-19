<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/7
 * Time: 19:50
 */

//最大子序和


/**
 * @param $array
 *
 * @return int
 */
function one($array)
{
    $max   = 0;
    $num   = 0;
    $count = count( $array );
    for ($i = 0; $i < $count; $i++) {
        $num = 0;
        for ($j = $i; $j < $count; $j++) {
            $num = $num + $array[ $j ];
            if ($num > $max) {
                $max = $num;
            }
        }
    }
    return $max;
}

/**
 * @param $arr
 *
 * @return int
 */
function Solution($arr)
{
    $current = $arr[ 0 ];
    $max     = 0;
    $count   = count( $arr );
    for ($i = 1; $i < $count; $i++) {
        if ($current < 0)
            $current = $arr[ $i ];
        else
            $current += $arr[ $i ];
        if ($current > $max)
            $max = $current;
    }
    return $max;
}

class Solution
{

    /**
     * @param Integer[] $nums
     *
     * @return Integer
     */
    function maxSubArray($nums)
    {
        $count = count( $nums );
        if ($count == 0) {
            return null;
        }
        $current = PHP_INT_MIN;
        $max     = $nums[ 0 ];
        for ($i = 0; $i < $count; $i++) {
            $current = max( $nums[$i], $current + $nums[ $i ] );
            $max     = max( $current, $max );

        }
        return $max;
    }
}

//$a        = [-5, -5, -5, -5, -5, -2, -1, -5, -4];
$a        = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
$Solution = new Solution();
$a        = $Solution->maxSubArray( $a );
var_dump( $a );


