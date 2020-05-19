<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function validPalindrome($s)
    {
        $l = 0;
        $r = strlen($s) - 1;
        while ($l < $r) {
            if ($s[$l] == $s[$r]) {
                ++$l;
                --$r;
            } else {
                return $this->acs($s,$l+1,$r) || $this->acs($s, $l, $r-1);
            }
        }
        return true;
    }
    function acs($s, $l, $r){
        while ($l < $r) {
            if ($s[$l] == $s[$r]) {
                ++$l;
                --$r;
            }else{
                return false;
            }
        }
        return true;
    }
}

$a = 'abccccccccca';
$a = 'abc';
var_dump($a);
$Solution = new Solution();
$a = $Solution->validPalindrome($a);
var_dump($a);