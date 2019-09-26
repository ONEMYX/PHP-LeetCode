<?php

namespace leetcode;
class Solution
{

    /**
     * @param Integer $N
     *
     * @return Integer
     */
    function fib($N)
    {
        if ($N < 2) {
            return $N;
        }
        return $this->fib( $N - 1 ) + $this->fib( $N - 2 );
    }

    function one($N)
    {
        $head = 0;
        $end  = 1;
        while ($N > 1) {
            $temp = $end;
            $end  += $head;
            $head = $temp;
            $N--;
        }
        return $end;
    }
}

$n = 5;
$n = 2;
$n = 3;
$n = 4;
$a = new Solution();
var_dump( $a->one( $n ) );

