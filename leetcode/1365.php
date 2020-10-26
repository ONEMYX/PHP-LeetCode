<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $temp = $nums;
        rsort($temp);
        $temp = array_flip($temp);
        $len = count($nums);
        $arr = [];
        foreach ($nums as $k=>$v){
            $arr[] = $len-$temp[$v]-1;
        }
        return $arr;
    }
}


$nums = [8,1,2,2,3];
$adn   = new Solution();
//p(num_and($arr,$num));
var_dump( $adn->smallerNumbersThanCurrent( $nums ) );