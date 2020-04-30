<?php

class Solution
{
    private $arr;
    private $num = [];

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target)
    {

    }
}

//回溯
$a      = [ 2, 3, 5 ];
$target = 8;
//$a        = [3,2,1,3];
$Solution = new Solution();
$a        = $Solution->combinationSum($a, $target);
var_dump($a);