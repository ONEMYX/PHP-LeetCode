<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums)
    {
        $max = $maxArr[] = $minArr[] = $nums[0];
        $len = count($nums)-1;
        for ($i = 1; $i <= $len; $i++) {
            $maxArr[$i] = max($maxArr[$i - 1] * $nums[$i], $minArr[$i - 1] * $nums[$i], $nums[$i]);
            $minArr[$i] = min($maxArr[$i - 1] * $nums[$i], $minArr[$i - 1] * $nums[$i], $nums[$i]);
            $max = max($max, $maxArr[$i]);
        }
        return $max;
    }
}

$a = [4, 1, 4, 6];
$a = [-4,-3];
//$a        = [3,2,1,3];
$Solution = new Solution();
$a = $Solution->maxProduct($a);
var_dump($a);