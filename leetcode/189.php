<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/28
 * Time: 10:37
 */

//旋转数组
$a = [-1,-100,3,99];
$k = 2;
function move_array($arr,$k){
    $count = count($arr);
    $move = $k%$count;
    $b = array();
    foreach ($arr as $key=>$value){
        if ($key<$move){
            $num = $key+$move;
            if ($num>=$count)
                $num = $num-$count;
            $b[$key] = $arr[$num];
        }else{
            $b[$key] = $arr[$key-$move];
        }
    }
    return $b;
}
$a = move_array($a,$k);
var_dump($a);