<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 15:16
 */
//加一

function jiayi($a,$count = ''){
    if ($count === ''){
        $count = count($a)-1;
    }elseif($count == 0 ){
        if($a[$count]==9){
            $a[0] = 1;
            $num  =count($a);
            for ($i=1;$i<=$num;$i++){
                $a [$i]=0;
            }
            return $a;
        }
    }
    if($a[$count]==9){
        $a[$count]=0;
        $count -=1;
        $a = jiayi($a,$count);
    }else{
        $a[$count]+=1;
    }
    return $a;
}
$a = [9,9,9];
var_dump(jiayi($a));