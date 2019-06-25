<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        if (strlen($s)!=strlen($t)){
            return false;
        }
        $sarr = array_count_values(str_split($s,1));
        $tarr = array_count_values(str_split($t,1));
        $diff = array_diff_assoc($sarr,$tarr);
        if ($diff){
            return false;
        }
        return true;
    }
}


$s = "rat";
$t = "car";
$solu = new Solution();
$B    = $solu->isAnagram($s,$t);
var_dump($B);
