<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/7
 * Time: 11:07
 */
//有序数组中的单一元素
include ('../function.php');
/**
 * @param $arr
 * @param null $min
 * @param null $max
 * @return mixed
 */
function a($arr,$min=null,$max=null){
    if (empty($max)){
        $min = 0 ;
        $max = count($arr)-1;
        $num = $max/2;
    }else{
        $num = $min+ ($max-$min)/2;
    }
    if ($arr[$num]!=$arr[$num+1] && $arr[$num]!=$arr[$num-1]){
        return $arr[$num];
    }elseif($arr[$num]==$arr[$num+1] && $arr[$num]!=$arr[$num-1]){
        $min = $num;
        a($arr,$min,$max);
    }elseif($arr[$num] == $arr[$num-1] && $arr[$num]!=$arr[$num+1]){
        $max = $num;
        $b = a($arr,$min,$max);
    }
    return $b;
}
$a = [1,1,2,3,3,4,4,8,8];
$b = a($a);
p($b);
