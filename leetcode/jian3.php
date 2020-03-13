<?php
/*
 * Project: PHP-LeetCode
 * File: 4.php
 * CreateTime: 2020/3/13 16:55
 * Author: 孟亚鑫
 * Email: yyaxinn@gmail.com
 */
class Solution
{

    /**
     * @param Integer[] $nums
     *
     * @return Integer
     */
    function findRepeatNumber($nums)
    {
        $arr = [];
        foreach ($nums as $num) {
            if (array_key_exists( $num, $arr )) {
                return $num;
            } else {
                $arr[$num] = $num;
            }
        }
        return false;
    }
}

$arr = [2, 3, 1, 0, 2, 5, 3];
var_dump((new Solution())->findRepeatNumber($arr));