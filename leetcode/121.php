<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/6
 * Time: 19:19
 */


//include('../function.php');


// 算出 每一天的差价
function node($array)
{
    $max   = 0;
    $count = count( $array );
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = $i + 1; $j < $count; $j++) {
            $num = $array[ $j ] - $array[ $i ];
            if ($num > $max) {
                $max = $num;
            }
        }
    }
    return $max;
}

function b($array)
{
    $max   = 0;
    $min   = $array[ 0 ];
    $count = count( $array );
    for ($i = 0; $i < $count; $i++) {
        if ($array[ $i ] < $min) {
            $min = $array[ $i ];
        } elseif (($array[ $i ] - $min) > $max) {
            $max = $array[ $i ] - $min;
        }
    }
    return $max;
}

class Solution
{

    /**
     * @param Integer[] $prices
     *
     * @return Integer
     */
    function maxProfit($prices)
    {
        $max = 0;
        $min = $prices[ 0 ];
//        foreach ($prices as$key=> $price) {
//            if ($price < $min) {
//                $min = $price;
//            } elseif (($price - $min) > $max) {
//                $max = $price-$min;
//            }
//        }
        $count = count( $prices );
        for ($i = 0; $i < count( $prices ); $i++) {
            if ($prices[ $i ] < $min) {
                $min = $prices[ $i ];
            } elseif (($prices[ $i ] - $min) > $max) {
                $max = $prices[ $i ] - $min;
            }
        }
        return $max;
    }
}

$a        = [7, 1, 5, 3, 7, 2];
$Solution = new Solution();
$a        = $Solution->maxProfit( $a );
var_dump( $a );

