<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/10
 * Time: 10:57
 */

//打家劫舍

include ('../function.php');
function rob ($array) {
    $last = 0;
    $now = 0;
    for ($i = 0; $i < count($array); $i++) {
        $temp = $last;
        $last = $now;
        $now = max($temp + $array[$i], $now);
    }
    return $now;
}
$arr =[1,2,3,1];
$b = rob($arr);
p($b);