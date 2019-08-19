<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/20
 * Time: 15:49
 */

//Fizz Buzz

/**
 * @param int $n
 *
 * @return string
 */
function fizzBuzz($n = 0)
{
    if ($n <= 0 || !is_numeric( $n ))
        return 'error';
    $i   = 1;
    $out = $i;
    while ($i <= $n) {
        if ($i % 3 == 0) {
            $out = "Fizee";
            if ($i % 5 == 0) {
                $out .= " Buzz";
            }
        } elseif ($i % 5 == 0) {
            $out = "Buzz";
        } else {
            $out = $i;
        }
        ++$i;
        echo $out;
        echo '<br>';
    }
}

//fizzBuzz(16);


class Solution
{

    /**
     * @param Integer $n
     *
     * @return String[]
     */
    function fizzBuzz($n)
    {
        $i     = 1;
        $arr   = [];
        $one   = 'Fizz';
        $two   = 'Buzz';
        $three = 'FizzBuzz';

        while ($i <= $n) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                array_push($arr,$three);
            } elseif ($i % 3 == 0) {
                array_push($arr,$one);
            } elseif ($i % 5 == 0) {
                array_push($arr,$two);
            }else{
                array_push($arr,"$i");
            }
            $i++;
        }

        return $arr;
    }
}

$n = 15;
//$n=1;
$size = new Solution();
var_dump( $size->fizzBuzz( $n ) );