<?php

class Solution
{

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s)
    {
        $count = count($s);
        $end = $count-1;
        $num   = intval($count / 2);
        for ($i = 0; $i < $num; $i++) {
            $temp = $s[$i];
            $s[$i]=$s[$end];
            $s[$end]= $temp;
            $end -=1;
        }
    }
}


$arr  = ["h", "e", "l", "l", "o"];
$arr  = ["H","a","n","n","a","h"];
$solu = new Solution();
$solu->reverseString($arr);
var_dump($arr);