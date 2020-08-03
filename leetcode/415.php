<?php

class Solution
{

    /**
     * @param String $num1
     * @param String $num2
     * @return String
     */
    function addStrings($num1, $num2)
    {

        $len1 = strlen($num1);
        $len2 = strlen($num2);
        if ($len1 == 0) return $len1;
        if ($len2 == 0) return $len2;

        $len1 = $len1 - 1;
        $len2 = $len2 - 1;

        $res = '';
        $temp = 0;
        while ($len1 >= 0 || $len2 >= 0 || $temp) {
            $num = $temp;
            if ($len1 >= 0) {
                $num += substr($num1, $len1, 1);
                $len1--;
            }
            if ($len2 >= 0) {
                $num += substr($num2, $len2, 1);
                $len2--;
            }
            $temp = floor($num / 10);
            $res = $num % 10 . $res;
        }

        return $res;
    }
}
