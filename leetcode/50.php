<?php

class Solution
{

    /**
     * @param Float   $x
     * @param Integer $n
     *
     * @return Float
     */
    function myPow($x, $n)
    {
        if ($n == 0) {
            return 1;
        }
        if ($n < 0) {
            $x = 1 / $x;
            $n = abs( $n );
        }
        $size = $this->size( $x, $n );
        return $size;
    }

    function size($x, $n)
    {
        if ($n == 1) {
            return $x;
        }
        $size = $this->size( $x, floor( $n / 2 ) );
        return $n % 2 ? $size * $size * $x : $size * $size;
    }
}

$x        = 2;
$n        = 3;
$solution = new Solution();
$b        = $solution->myPow( $x, $n );
var_dump( $b );