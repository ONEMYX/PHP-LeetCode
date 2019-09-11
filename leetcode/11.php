<?php

class Solution
{

    /**
     * @param Integer[] $height
     *
     * @return Integer
     */
    function maxArea($height)
    {
        $start = $max = 0;
        $end   = count( $height ) - 1;
        while ($start < $end) {
            $max = max( $max, min( $height[$start], $height[$end] ) * ($end - $start) );
            if ($height[$start] > $height[$end]) {
                --$end;
            } else {
                ++$start;
            }

        }
        return $max;

    }
}

$height   = [1, 8, 6, 2, 5, 4, 8, 3, 7];
$Solution = new Solution();
$data     = $Solution->maxArea( $height );
var_dump( $data );