<?php

class Solution
{

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     *
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2)
    {
        $arr = [];
        $i   = 0;
        $j   = 0;
        while (isset( $nums1[$i] ) || isset( $nums2[$j] )) {
            if (isset( $nums1[$i] ) && isset( $nums2[$j] )) {
                if ($nums1[$i] <= $nums2[$j]) {
                    $arr[] = $nums1[$i];
                    $i++;
                } else {
                    $arr[] = $nums2[$j];
                    $j++;
                }
            } elseif (isset( $nums1[$i] ) && !isset( $nums2[$j] )) {
                $arr[] = $nums1[$i];
                $i++;
            } elseif (!isset( $nums1[$i] ) && isset( $nums2[$j] )) {
                $arr[] = $nums2[$j];
                $j++;
            }
        }
        $list = $i + $j;
        if ($list % 2) {
            $num = $arr[intval( $list / 2 )];
        } else {
            $key = intval( $list / 2 );
            $num = intval( $arr[$key] + $arr[$key - 1] ) / 2;
        }
        return $num;
    }
}


$nums1    = [1, 3];
$nums2    = [2,4];
$nums1 =[100000];
$nums2=[100001];
$Solution = new Solution();
$data     = $Solution->findMedianSortedArrays( $nums1, $nums2 );
var_dump( $data );


