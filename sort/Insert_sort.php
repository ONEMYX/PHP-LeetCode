<?php
//插入排序
function insert_sort($arr)
{
    $len = count($arr) - 1;
    if ($len<1) return $arr;
    for ($i = 1; $i <= $len; $i++) {
        $sub = $i;
        for ($j = $i - 1; $j >= 0; $j--) {
            if ($arr[$sub] < $arr[$j]) {
                swap($arr[$sub], $arr[$j]);
                $sub = $j;
            }else{
                break;
            }
        }
    }
    return $arr;
}

function swap(&$i, &$j)
{
    $temp = $i;
    $i = $j;
    $j = $temp;
}

$arr = range(1, 20);
shuffle($arr);
$arr = [31,41,59,26,41,58];
var_dump($arr);
$result = insert_sort($arr);
var_dump($result);