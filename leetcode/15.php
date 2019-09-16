<?php

class Solution
{

    /**
     * @param Integer[] $nums
     *
     * @return Integer[][]
     */
    function threeSum($nums)
    {
        $arr = [];
        $len = count( $nums );
        if ($nums == null || $len < 3) return $arr;
        $nums = $this->quickSort( $nums );
        for ($i = 0; $i < $len; $i++) {
            if ($nums[$i] > 0) break;
            if ($i > 0 && $nums[$i] == $nums[$i - 1]) continue;
            $L = $i + 1;
            $R = $len - 1;
            while ($L < $R) {
                $sum = $nums[$i] + $nums[$L] + $nums[$R];
                if ($sum == 0) {
                    $arr[] = [$nums[$i], $nums[$L], $nums[$R]];
                    while ($L < $R && $nums[$L] == $nums[$L + 1]) {
                        $L++;
                    }
                    while ($L < $R && $nums[$R] == $nums[$R - 1]) {
                        $R--;
                    }
                    $L++;
                    $R--;
                } else if ($sum < 0) $L++;
                else if ($sum > 0) $R--;
            }
        }


        return $arr;
    }

    function size($i, $size, $nums, $bool = true)
    {
        if ($nums[$i] != $size) {
            return $i;
        } else {
            if ($bool) {
                ++$i;
            } else {
                --$i;
            }
            $this->size( $i, $size, $nums );
        }
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
            if ($nums[$i] > $base) {
                $right[] = $nums[$i];
            } elseif ($nums[$i] < $base) {
                $left[] = $nums[$i];
            } else {
                $item[] = $nums[$i];
            }
        }
        //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
        $left  = $this->quickSort( $left );
        $right = $this->quickSort( $right );
        //合并
        return array_merge( $left, $item, $right );
    }
}

$nums = [-1, 0, 1, 2, -1, -4];
$solu = new Solution();
$B    = $solu->threeSum( $nums );
var_dump( $B );