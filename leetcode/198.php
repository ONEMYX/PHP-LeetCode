<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/10
 * Time: 10:57
 */

//打家劫舍
//include ('../function.php');
function rob($array)
{
    $last = 0;
    $now  = 0;
    for ($i = 0; $i < count( $array ); $i++) {
        $temp = $last;
        $last = $now;
        $now  = max( $temp + $array[ $i ], $now );
    }
    return $now;
}


class Solution
{

    /**
     * @param Integer[] $nums
     *
     * @return Integer
     */
    function rob($nums)
    {
        //1.
        $last = 0;
        $now  = 0;
        foreach ($nums as $key => $value) {
            $temp = $last;
            $last = $now;
            $now  = max( $temp + $value, $now );
        }
        return $now;
    }
}

$arr      = [1, 2, 3, 1, 1, 2, 3, 10];
$arr      = [2, 1, 1, 2];
$Solution = new Solution();
$a        = $Solution->rob( $arr );
var_dump( $a );