<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/28
 * Time: 10:37
 */

//旋转数组
$nums = [1,2,3];
$k = 2;
function rotate(&$nums,$k){
    if ($k<=0){
        return;
    }
    $count = count($nums);
    $move = $k%$count;
    if ($move==0){
        return;
    }
    for ($i=0;$i<$move;$i++){
        $a = array_pop($nums);
        array_unshift($nums,$a);
    }

}
$a = rotate($nums,$k);
var_dump($nums);

//旋转数组
$a = [1,2,3];
$k = 2;
function move_array($arr,$k){
    if ($k<=0){
        return $arr;
    }
    $count = count($arr);
    $move = $k%$count;
    if ($move==0){
        return $arr;
    }
    $b = array();
    foreach ($arr as $key=>$value){
        $a= $key-$move;
        if ($a<0){
            $nowkey = $count+$a;
        }else{
            $nowkey = $a;
        }
        $b[$key] = $arr[$nowkey];
    }

    return $b;
}
$a = move_array($a,$k);
var_dump($a);
