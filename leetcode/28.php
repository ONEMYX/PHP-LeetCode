<?php

class Solution
{

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        if (!$needle) {
            return 0;
        }
        $lenb = strlen($needle);
        $len  = strlen($haystack);
        $temp = $len-$lenb;
        if ($temp<0){
            return -1;
        }
        for ($i = 0; $i <= $temp; $i++) {
            if (substr($haystack, $i, $lenb) == $needle) {
                return $i;
            }
        }
        return -1;
    }

}


$s    = "aaaaa";
$t    = "bba";
$solu = new Solution();
$B    = $solu->strStr($s, $t);
var_dump($B);

