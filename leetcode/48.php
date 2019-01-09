<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 21:04
 */
//旋转图像

include('../function.php');

function rotate($arr)
{
    $num = count($arr)-1;
    p($num);
    $b = [];

    for ($j=0;$j<=$num;$j++){
        $k=0;
        for ($i=$num;$i>=0;$i--){
            $b[$j][$k] = $arr[$i][$j];
            ++$k;
        }
    }
    return $b;
}


$a =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
p($a);
$b = rotate($a);
p($b);


