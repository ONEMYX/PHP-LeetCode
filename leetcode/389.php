<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function findTheDifference( $s, $t )
    {
        if (empty( $s )) return $t;
        $temp = substr($t,-1,1);
        $len = strlen($s);
        for ($i=0;$i<$len;++$i){
            $temp ^= substr($s,$i,1)^substr($t,$i,1);
        }
        return $temp;

    }
}


$s    = "abcd";
$t    = "abcde";
$solu = new Solution();
$B    = $solu->findTheDifference( $s, $t );
var_dump( $B );