<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $index = array_search($target,$nums);
        if($index !== false){
            return $index;
        }
        foreach($nums as $key => $value){
            if($value > $target){
                return $key;
            }
        }
        return ++$key;
    }
}

$nums =[1,3,5,6];
$target = 2;
$a = new Solution();
$b = $a->searchInsert($nums,$target);
var_dump($b);