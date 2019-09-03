<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $len = strlen($s);
        $max =0;
        for ($i=0;$i<$len;$i++){
            $str=[$s{$i}];
            $num=1;
            for ($j=$i+1;$j<$len;$j++){
                if (in_array($s{$j},$str)){
                    break;
                }else{
                    $str[]=$s{$j};
                    ++$num;
                }
            }
            $max = max($max,$num);
        }
        return $max;
    }
}
//$a ="pwwkew";
$a ="abcabcbb";
$a ="bbbbb";
$a = "abcde";
$a = "dvdf";
$Solution = new Solution();
$argc = $Solution->lengthOfLongestSubstring($a);
var_dump($argc);