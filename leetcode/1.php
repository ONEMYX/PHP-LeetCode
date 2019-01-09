<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 17:17
 */
//两数之和
include_once('../function.php');


function num_and($arr,$num){
    for ($i=0;$i<count($arr);$i++){
        $target = $num-$arr[$i];
        for ($j=$i+1;$j<count($arr);$j++){
            if ($arr[$j]==$target){
                return [$i,$j];
            }
        }
    }
}

$arr = [2, 7, 11, 15];
$num = 9;
p(num_and($arr,$num));