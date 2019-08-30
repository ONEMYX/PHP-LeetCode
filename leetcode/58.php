<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $arr=preg_split('/ +/',trim($s));
        return  strlen(end($arr));
    }
}

$nums ="Hello World";
//$nums ="a ";
//$target = 2;
$a = new Solution();
$b = $a->lengthOfLastWord($nums);
var_dump($b);