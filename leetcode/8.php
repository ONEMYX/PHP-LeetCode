<?php

class Solution
{

    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str)
    {
        $str = trim($str);
        $len = strlen($str);
        if ($len < 1) {
            return 0;
        }
        $num    = '';
        $symbol = '';
        $i      = 0;
        $a      = substr($str, 0, 1);
        if ($a == '-' || $a == '+') {
            $symbol = $a;
            $i      = 1;
        }

        for ($i; $i < $len; $i++) {
            if (ctype_digit($str{$i})) {
                $num .= $str{$i};
            } else {
                break;
            }
        }
        $num = intval($num);
        if ($num) {
            $num = $num * ($symbol . (1));
        } else {
            return 0;
        }
        switch ($num) {
            case $num < -2147483648:
                return -2147483648;
            case $num > 2147483647:
                return 2147483647;
            default:
                return $num;
        }
    }
}

$s    = "42";
$s    = "+1";
$s    = "   -42";
$s    = "4193 with words";
$s    = "words and 987";
$s    = "-91283472332";
$s    = "-";
$s    = "";
$s    = "2147483648";
$s    = "    0000000000000   ";
$solu = new Solution();
$B    = $solu->myAtoi($s);
var_dump($B);