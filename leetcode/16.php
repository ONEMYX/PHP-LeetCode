<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer   $target
     *
     * @return Integer
     */
    function threeSumClosest($nums, $target)
    {
        sort( $nums );
        $ans  = $nums[0] + $nums[1] + $nums[2];
        $len  = count( $nums );
        for ($i = 0; $i < $len; $i++) {
            if ($i != 0 && $nums[$i] == $nums[$i - 1]) {
                continue;
            }
            $L = $i + 1;
            $R = $len - 1;
            while ($L < $R) {
                $sum = $nums[$i] + $nums[$L] + $nums[$R];
                if (abs( $target - $sum ) < abs( $target - $ans )) {
                    $ans = $sum;
                }
                if ($sum < $target)
                    $L++;
                elseif ($sum > $target)
                    $R--;
                else
                    return $sum;
            }
        }
        return $ans;
    }

    function quickSort($nums)
    {
        $len = count( $nums );
        if ($len <= 1) {
            return $nums;
        }
        $left  = [];
        $right = [];

        $base = $nums[0];
        $item = [$base];

        for ($i = 1; $i < $len; $i++) {
            $temp = $nums[$i];
            if ($temp < $base) {
                $left[] = $temp;
            } elseif ($temp > $base) {
                $right[] = $temp;
            } else {
                $item[] = $temp;
            }
        }

        $left  = $this->quickSort( $left );
        $right = $this->quickSort( $right );

        return array_merge( $left, $item, $right );
    }
}

$nums   = [-1, 2, 1, -4];
$target = 1;
$solu   = new Solution();
$B      = $solu->threeSumClosest( $nums, $target );
var_dump( $B );