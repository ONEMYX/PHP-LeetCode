<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $len = strlen($s)-1;
        $i = 0;
        while ($i <$len){
            if (ctype_alnum ($s{$i})){
                if (ctype_alnum ($s{$len})){
                    if (strcasecmp($s{$i},$s{$len})){
                        return false;
                    }
                    $i++;
                    $len--;
                }else{
                    $len--;
                }
            }else{
                $i++;
            }
        }
        return true;
    }
}



$s = "0P";
$solu = new Solution();
$B    = $solu->isPalindrome($s);
var_dump($B);
