<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x)
    {
        $len = strlen($x) - 1;
        if ($x < 0) {
            $len = $len - 1;
        }
        $i = 1;
        $r = 0;
        while ($len >= 0) {
            $num = $x % 10;
            $x   = ($x - $num) / 10;

            $r += ($num) * pow(10, $len);
            ++$i;
            --$len;
        }
        if (log(abs($r),2) > 31) {
            return 0;
        }
        return $r;
    }
}


$arr  = 1534236469;
$solu = new Solution();
$B    = $solu->reverse($arr);
var_dump($B);