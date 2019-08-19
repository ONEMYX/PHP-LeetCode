<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer   $m
     * @param Integer[] $nums2
     * @param Integer   $n
     *
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n)
    {
        $b = $nums1;
        $a = 0;
        $i = 0;
        $j = 0;

        while (true) {
            if ($i >= $m && $j >= $n) {
                break;
            }
            if ($i >= $m && $j < $n) {
                $nums1[ $a ] = $nums2[ $j ];
                $j++;
                $a++;
                continue;
            }
            if ($i < $m && $j >= $n) {
                $nums1[ $a ] = $b[ $i ];
                $i++;
                $a++;
                continue;
            }
            if ($b[ $i ] <= $nums2[ $j ]) {
                $nums1[ $a ] = $b[ $i ];
                $i++;
                $a++;
                continue;
            }
            if ($b[ $i ] > $nums2[ $j ]) {
                $nums1[ $a ] = $nums2[ $j ];
                $j++;
                $a++;
                continue;
            }
        }
    }
}


$nums1    = [1, 2, 3, 0, 0, 0];
$m        = 3;
$nums2    = [2, 5, 6];
$n        = 3;
$Solution = new Solution();
$Solution->merge( $nums1, $m, $nums2, $n );
var_dump( $nums1 );