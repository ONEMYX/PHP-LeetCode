<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($s)
    {
        $len = strlen($s);
        for ($i = 0; $i < $len; $i++) {
            $str = substr($s, $i, 1);
            if (strrpos($s, $str) == $i && strpos($s, $str) == $i) {
                return $i;
            }
        }
        return -1;
    }
}


$arr  = "loveleetcode";
$solu = new Solution();
$B    = $solu->firstUniqChar($arr);
var_dump($B);
