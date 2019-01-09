<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 16:40
 */
//移动零

include_once('../function.php');
/**
 * @param $arr
 * @return array
 */
function move_zero($arr)
{
    $b = [];
    foreach ($arr as $key => $value) {
        if ($arr[$key] == 0) {
            $b[] = $arr[$key];
            unset($arr[$key]);
        }
    }
    $arr = quickSort(array_values($arr));
    $a = array_merge($arr,$b);
    return $a;
}
function quickSort($array)
{
    if(!isset($array[1]))
        return $array;
    $mid = $array[0]; //获取一个用于分割的关键字，一般是首个元素
    $leftArray = array();
    $rightArray = array();

    foreach($array as $v)
    {
        if($v > $mid)
            $rightArray[] = $v;  //把比$mid大的数放到一个数组里
        if($v < $mid)
            $leftArray[] = $v;   //把比$mid小的数放到另一个数组里
    }

    $leftArray = quickSort($leftArray); //把比较小的数组再一次进行分割
    $leftArray[] = $mid;        //把分割的元素加到小的数组后面，不能忘了它哦

    $rightArray = quickSort($rightArray);  //把比较大的数组再一次进行分割
    return array_merge($leftArray,$rightArray);  //组合两个结果
}


$arr =[0,1,0,3,12];
p(move_zero($arr));
