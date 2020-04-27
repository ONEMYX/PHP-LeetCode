<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search($nums, $target)
    {
        $len = count($nums);
        if ($len == 0) {
            return -1;
        }
        if ($len == 1) {
            return $nums[ 0 ] == $target ? 0 : -1;
        }
        $l = 0;
        $r = $len - 1;
        while ($l <= $r) {
            $mid = ceil(( $l + $r ) / 2);
            if ($nums[ $mid ] == $target) return $mid;
            if ($nums[ $r ] == $target) return $r;
            if ($nums[ $l ] == $target) return $l;
            if ($nums[ $l ] <= $nums[ $mid ]) {
                if ($nums[ $l ] < $target && $nums[ $mid ] > $target) {
                    $l++;
                    $r = $mid - 1;
                } else {
                    $l = $mid + 1;
                    $r--;
                }
            } else {
                if ($nums[ $r ] > $target && $nums[ $mid ] < $target) {
                    $l = $mid + 1;
                    $r--;
                } else {
                    $r = $mid - 1;
                    $l++;
                }
            }
        }
        return -1;

    }
}


$arr = [ 4, 5, 6, 7, 0, 1, 2 ];
$arr = [ 3, 1 ];
//$arr      = [ 8, 7, 6, 5, 4, 3, 2, 1 ];
//$arr = [4,5,6,7];
//$arr = [2,4,3,5,1];
$solution = new  Solution();
//$solution = new  Solutions();
$solution = $solution->search($arr, 0);
var_dump($solution);
exit();