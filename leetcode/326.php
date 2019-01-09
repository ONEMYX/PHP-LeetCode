<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/2
 * Time: 11:16
 */
//3的幂

/**
 * @param null $num
 * @param int $add
 * @return mixed
 */
function Addnum($num = null, $add = 0 ){
    if ($num<=0){
        return $add;
    }
    $add += $num%10;
    $num = intval($num/10);
    $return = Addnum($num,$add);
    return $return;
}
function Three($num){
    if ($num<=1){
        return 'true';
    }
    $div_num = $num/3;
    if (!is_int($div_num)){
        return 'false';
    }
    $return = Three($div_num);
    return $return;
}
function ThreePower($num){
    if (!is_numeric($num)){
        return 'error';
    }
    $add = Addnum($num);
//    Dump($add);

    if ($add%3!=0){
        return 'false';
    }
    $return = Three($num);
    return $return;
}
$num = 26;
$return = ThreePower($num);
Dump($return);