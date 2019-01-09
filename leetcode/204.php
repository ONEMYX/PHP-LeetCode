<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/20
 * Time: 18:27
 */
//计数质数

/**
 * @param int $n
 * @return array|string
 */
function primeNumber($n=0)
{
    $arr = [];
    if ($n<2)
        return 'error';
    while ($n>1){
        if ( $n==2 || $n == 3 ||$n == 5 || $n ==7){
            $arr[]=$n;
            --$n;
            continue;
        }
        if (!sub($n)){
            --$n;
            continue;
        }
        $arr[] = $n;
        --$n;
    }

    return $arr;
}
function sub($n,$i=0){
    $arr=[2,3,5,7];
    if ($i>=3){
        return true;
    }
    if ($n%$arr[$i]==0){
        return false;
    }else{
        $return = sub($n,$i+1);
        return $return;
    }
}

$arr = primeNumber(17);
Dump($arr);
