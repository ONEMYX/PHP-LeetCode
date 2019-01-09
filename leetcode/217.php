<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 13:36
 */



//存在重复
$a = [1,2,3,4];
function array_repeat($arr){
    $b = [];
    foreach ($arr as $key=>$value){
        if (in_array($arr[$key],$b)){
            return 'true';
        }else{
            $b[]=$arr[$key];
        }
    }
    return 'false';
}
echo array_repeat($a);