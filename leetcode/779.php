<?php

class Solution
{

    /**
     * @param Integer $N
     * @param Integer $K
     *
     * @return Integer
     */
    function kthGrammar($N, $K)
    {
        if ($N == 1) return 0;
        return ($this->kthGrammar( $N - 1, ($K - 1) / 2 + 1 ) == 0) ? (($K - 1) % 2) : 1 - (($K - 1) % 2);
    }
}

$N        = 4;
$N        = 2;
$k        = 5;
$k        = 1;
$Solution = new Solution();
$a        = $Solution->kthGrammar( $N, $k );
var_dump( $a );