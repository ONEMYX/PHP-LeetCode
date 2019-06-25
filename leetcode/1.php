<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 17:17
 */
//两数之和

/**
 * @param $arr
 * @param $num
 * @return array
 */
function num_and($arr, $num){
    for ($i=0;$i<count($arr);$i++){
        $target = $num-$arr[$i];
        for ($j=$i+1;$j<count($arr);$j++){
            if ($arr[$j]==$target){
                return [$i,$j];
            }
        }
    }
}

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        return $this->num_and($nums,$target);
    }
    function num_and($arr, $num){
        $len =count($arr);
        for ($i=0;$i<$len;$i++){
            $target = $num-$arr[$i];
            for ($j=$i+1;$j<$len;$j++){
                if ($arr[$j]==$target){
                    return [$i,$j];
                }
            }
        }
    }
}

$arr = [2, 7, 11, 15];
$num = 9;
$adn = new Solution();
//p(num_and($arr,$num));
var_dump($adn->twoSum($arr,$num));