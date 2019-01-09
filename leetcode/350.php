<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 14:09
 */


function array_intersects($arr1,$arr2){
    $count1 = count($arr1);
    $count2 = count($arr2);
    if ($count1>$count2){
        $return = array_intersect_ex($arr2,$arr1);
    }else{
        $return = array_intersect_ex($arr1,$arr2);
    }
    var_dump($return);
}
function array_intersect_ex($a,$b){
    $c = [];
    foreach ($a as $key=>$value){
        if (in_array($a[$key],$b)){
            $c[]=$a[$key];
        }
    }
    return $c;
}



$nums1 = [2,2];
$nums2 = [1,2,2,1];
array_intersects($nums1,$nums2);