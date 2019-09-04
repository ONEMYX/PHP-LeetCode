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
    /**
     * 优化 最大数的提取 结构更加分明
     *
     */
    function lengthOfLongestSubstring1($s) {
        $len = strlen($s);
        $max=[0];
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
            $max[$i]=$num;
        }
        return max($max);
    }
    /**
     * 结构优化
     * 定义一个左边闭合的滑窗移动j 如果j 来判断 i->j之间是否有相同的
     * 如果存在，记录长度 并将窗口移动一位 [i+1,j);
     *
     */
    function lengthOfLongestSubstring2($s) {
        $s_len=strlen($s);
        $arr = [];
        $amx=$i=$j=0;
        while ($j<$s_len){
            $chart = $s{$j};
            if (in_array($chart,$arr)){
                $i++;
                array_shift($arr);
            }else{
                $arr[]=$s{$j};
                $j++;
            }
            $amx = max($amx,$j-$i);
        }
        return $amx;
    }

    /**
     * 滑动窗口优化
     * 如果有重复的 i 应该为重复的下标。
     *
     */
    function lengthOfLongestSubstring3($s) {
        $s_len=strlen($s);
        $s_arr = [];
        $amx=0;
        for ($i=$j=0;$j<$s_len;$j++){
            $chart = $s{$j};
            if (array_key_exists($chart,$s_arr)){
                $i = max($i,$s_arr[$chart]+1);
            }
            $s_arr[$s{$j}]=$j;
            $amx = max($amx,$j-$i+1);

        }
        return $amx;
    }

}
$a ="pwwkew";
$a ="abcabcbb";
$a ="bbbbb";
$a = "abcde";
$a = "dvdf";
$a = "b";
$a = "";
$a = "abba";
$Solution = new Solution();
$argc = $Solution->lengthOfLongestSubstring3($a);
var_dump($argc);