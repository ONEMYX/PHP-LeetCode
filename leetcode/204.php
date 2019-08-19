<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/20
 * Time: 18:27
 */
//计数质数

/**
 * @param int $n
 *
 * @return array|string
 */
function primeNumber($n = 0)
{
    $arr = [];
    if ($n < 2)
        return 'error';
    while ($n > 1) {
        if ($n == 2 || $n == 3 || $n == 5 || $n == 7) {
            $arr[] = $n;
            --$n;
            continue;
        }
        if (!sub( $n )) {
            --$n;
            continue;
        }
        $arr[] = $n;
        --$n;
    }

    return $arr;
}

function sub($n, $i = 0)
{
    $arr = [2, 3, 5, 7];
    if ($i >= 3) {
        return true;
    }
    if ($n % $arr[ $i ] == 0) {
        return false;
    } else {
        $return = sub( $n, $i + 1 );
        return $return;
    }
}

//$arr = primeNumber(17);
//Dump($arr);
class Solution
{

    /**
     * @param Integer $n
     *
     * @return Integer
     */
    function countPrimes($n)
    {
        if ($n <= 2) {
            return 0;
        }
        $flag = new SplFixedArray($n + 1);
        for ($i = 0; $i <= $n; $i += 1) {
            $flag[$i] = 1;
        }
        for ($k = 3, $l = intval(sqrt($n)); $k <= $l; $k += 2) {
            if ($flag[$k] == 0) {
                continue;
            }
            for ($i = $k + $k + $k; $i <= $n; $i += $k + $k) {
                $flag[$i] = 0;
            }
        }
        $res = 1;
        for ($i = 3; $i < $n; $i += 2) {
            $res += $flag[$i];
        }
        return $res;
    }

}

$n    = 12;
//$n    = 0;
//$n    = 3;
//$n    = 10000;
$size = new Solution();
var_dump( $size->countPrimes( $n ) );