<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/5
 * Time: 20:01
 */

//include ('../function.php');


function node($num)
{
    if ($num == 1) {
        return 1;
    } elseif ($num == 2) {
        return 2;
    } else {
        return node( $num - 1 ) + node( $num - 2 );
    }
}

class Solution
{
    /**
     * @param Integer $n
     *
     * @return Integer
     */
    function climbStairs($n)
    {
        $size[ 1 ] = 1;
        $size[ 2 ] = 2;
        for ($i = 3; $i <= $n; $i++) {
            $size[ $i ] = $size[ $i - 1 ] + $size[ $i - 2 ];
        }
        return$size[$n];
    }
}

$Solution = new Solution();
$a        = $Solution->climbStairs( 4 );
var_dump( $a );