<?php
/**
 * // This is MountainArray's API interface.
 * // You should not implement it, or speculate about its implementation
 * class MountainArray {
 *     function get($index) {}
 *     function length() {}
 * }
 */

class MountainArray
{
    private $arr;

    function __construct($arr)
    {
        $this->arr = $arr;
    }

    function get($index)
    {
        return $this->arr[ $index ];
    }

    function length()
    {
        return count($this->arr);
    }
}

class Solution
{
    /**
     * @param Integer $target
     * @param MountainArray $mountainArr
     * @return Integer
     */
    function findInMountainArray($target, $mountainArr)
    {
        /*
                //1. 获取长度
                //2. 计算中间长度，获取中间值来判断 数据在左侧还是右侧。
                //3. 如果在左侧，取mid 与len 的中间值在进行判断  快排

                $len = $mountainArr->length();
                $l   = 0;
                $r   = $len - 1;
                while ($l <= $r) {
                    $mid  = ceil(( $r + $l ) / 2);
                    $size = $mountainArr->get($mid);
                    if ($target == $size) return $mid;
                    if ($target > $size) {
                        $l = $mid;
                    } else {
                        $r = $mid;
                    }
                }
                return -1;
        */

        //2. 查找 驼峰
        $len = $mountainArr->length();
        $l   = 0;
        $r   = $len - 1;
        $pad = false;
        while (!$pad) {
            $mid   = ceil(( $r + $l ) / 2);
            $size  = $mountainArr->get($mid);
            $left  = $mountainArr->get($mid - 1);
            $right = $mountainArr->get($mid + 1);
            if ($size > $left && $size > $right) {
                $pad = $mid;
            } else {
                if ($left < $size) {
                    $l = $mid;
                } else {
                    $r = $mid;
                }
            }
        }

        $l_r = $pad;
        $r_l = $pad + 1;
        $l   = 0;
        $r   = $len - 1;

        while ($l <= $l_r) {
            $mid  = ceil(( $l + $l_r ) / 2);
            $size = $mountainArr->get($mid);
            if ($target == $size) {
                return $mid;
            }
            if ($target > $size) {
                $l = $mid+1;
            } else {
                $l_r = $mid-1;
            }
        }

        while ($r_l <= $r) {
            $mid  = ceil(( $r_l + $r ) / 2);
            $size = $mountainArr->get($mid);
            if ($target == $size) {
                return $mid;
            }
            if ($target < $size) {
                $r_l = $mid+1;
            } else {
                $r = $mid-1;
            }
        }

        return -1;


    }
}


//1. 简化一下 根据演变为 有序数组查找数组 不过需要 通过接口来调用 用快速查找
//2. 回到原题  如果可以知道驼峰的位置就可以 用二分查找 快速找到。
$arr    = [ 1, 2, 3, 4, 5,4,3,2 ];
//$arr    = [ 0, 1, 2, 4, 5, 6, 7, 3, 2, 1 ];
$target = 3;
//$a        = [3,2,1,3];
$Solution = new Solution();
$a        = $Solution->findInMountainArray($target, ( new MountainArray($arr) ));
var_dump($a);