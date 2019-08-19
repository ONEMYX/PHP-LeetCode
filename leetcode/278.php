<?php

/**
 * @param Integer $n
 * @param Integer $bad
 *
 * @return Integer
 */
class Solution
{

    /**
     * @param Integer $n
     * @param Integer $bad
     *
     * @return Integer
     */
    function firstBadVersion($n, $bad)
    {
        $left  = 1;
        $right = $n;
        while ($left < $right) {

        }
        return $left;
    }
}

$n        = 5;
$version  = 4;
$Solution = new Solution();
$Solution->firstBadVersion( $n, $version );