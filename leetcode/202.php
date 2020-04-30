<?php

class Solution
{

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n)
    {
        $num = 0;
        while ($n > 0) {
            $size=$n%10;
            $num +=pow($size,2);
            $n = floor($n/10);
        }
        if($num == 4) return false;
        if($num == 1) return true;
        return $this->isHappy($num);
    }
}

$a        = 19;
$Solution = new Solution();
$a        = $Solution->isHappy($a);
var_dump($a);