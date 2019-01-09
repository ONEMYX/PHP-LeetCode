<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/19
 * Time: 16:19
 */

//Shuffle an Array


/**
 * @param $arr
 * @return array
 */
function shuffle_arr($arr)
{
    $b = $arr;
    $return=[];
    $count = count($arr);
    $list = $count-1;
    while($list>=0){
        $num = rand(0,$list);
        $return[] = $b[$num];
        unset($b[$num]);
        $list= $list-1;
        $b = array_values($b);
    }
    return $return;
}

$array = ["Solution","shuffle","reset","shuffle"];
$b = shuffle_arr($array);
p($b);