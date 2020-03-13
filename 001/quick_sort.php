<?php
/*
 * Project: PHP-LeetCode
 * File: quick_sort.php
 * CreateTime: 2020/2/26 16:28
 * Author: 孟亚鑫
 * Email: yyaxinn@gmail.com
 */


function quick_sort($arr)
{
    $sarr[0] = ['left'=>0,'right'=>count($arr) - 1];   //该数组保存需要排序的子数组边界
    $i = 0;
    $n = 1;
    while($i < $n){	    //判断还有未排序子数组存在
        $left = $sarr[$i]['left'];	//数组左边界下标
        $right = $sarr[$i]['right'];	//数组右边界下标
        //随机获得关键值
        $k = rand($left, $right-1);
        $t = $arr[$left];
        $arr[$left] = $arr[$k];
        $arr[$k] = $t;
        $key = $left;	//关键值
        $f = false;	        //标志位
        while($left <= $right) {
            if($f == false) {
                if($arr[$right] < $arr[$key]) {
                    $t = $arr[$key];
                    $arr[$key] = $arr[$right];
                    $arr[$right] = $t;
                    $key = $right;
                    $f = true;
                }
                $right--;
            }
            if($f) {
                if($arr[$left] > $arr[$key]) {
                    $t = $arr[$key];
                    $arr[$key] = $arr[$left];
                    $arr[$left] = $t;
                    $key = $left;
                    $f = false;
                }
                $left++;
            }
        }
        //保存入边界数组
        if($sarr[$i]['left'] < $key - 1) {
            $sarr[$n++] = ['left'=>$sarr[$i]['left'], 'right'=>$key-1];
        }
        if($sarr[$i]['right'] > $key + 1) {
            $sarr[$n++] = ['left'=>$key + 1, 'right'=>$sarr[$i]['right']];
        }
        $i++;
    }
    return $arr;
}

//示例
$arr = range(1, 10);
shuffle($arr);
print_r($arr);

echo "<br>";
print_r(quick_sort($arr));