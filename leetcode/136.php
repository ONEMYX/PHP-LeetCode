<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 13:52
 */
//只出现一次的数字
function array_repeat($arr){
    $b =[];
    foreach ($arr as $value){
        if (in_array($value,$b)){
            unset($b[$value]);
        }else{
            $b[$value]=$value;
        }
    }
    return array_values($b)[0];
}

$a =  [1,2,1,2,4];
echo array_repeat($a);