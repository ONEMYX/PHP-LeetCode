<?php

/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/3
 * Time: 10:22
 */
class Solution
{

    /**
     * @param Integer $n
     *
     * @return Integer
     */
    function hammingWeight($n)
    {
        var_dump( $n );

    }
}

$a = 100;
$b = 200;
$a = $a ^ $b;
$b = $b ^ $a;
$a = $a ^ $b;
var_dump( $a, $b );
exit();

$s    = 00000000000000000000000000001011;
$s    = 00000000000000000000000010000000;
$solu = new Solution();
$num  = $solu->hammingWeight( $s );
var_dump( $num );