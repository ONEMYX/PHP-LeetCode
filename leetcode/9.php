<?php
class Solution {

    /**
     * 回文
     * 判断整数 反过来也是否正确
     * 在 相等判断的是否就已经返回的是 布尔值可以直接返回
     *
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {

        return $x==strrev($x);
    }
}
$x = 123;
$solution  = new  Solution();
$a = $solution->isPalindrome($x);
var_dump($a);