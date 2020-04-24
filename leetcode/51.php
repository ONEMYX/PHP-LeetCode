<?php

class Solution
{

    private $num = 0;
    private $arr = [];

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function reversePairs($nums)
    {
        if(empty($nums)){
        return 0;
    }
        $this->arr = $nums;
        $this->spit(0, count($nums) - 1);
        return $this->num;
    }

    function spit($left, $right)
    {
        if ($left >= $right) {
            return ;
        }
        $mid = floor($left + ( $right - $left ) / 2);

        $this->spit($left, $mid);
        $this->spit($mid + 1, $right);
        $this->mergeArr($left, $mid, $right);
    }

    function mergeArr($left, $mid, $right)
    {
        $leftStart = $left;
        $rightStart = $mid + 1;
        $temp = [];
        while ($leftStart<=$mid &&$rightStart<=$right){
            if ($this->arr[$leftStart]<=$this->arr[$rightStart]){
                $temp [] = $this->arr[$leftStart];
                $leftStart++;
            }else{
                $this->num += $mid-$leftStart+1;
                $temp[] = $this->arr[$rightStart];
                $rightStart++;
            }
        }
        while ($leftStart<=$mid){
            $temp[] = $this->arr[$leftStart];
            $leftStart++;
        }
        while ($rightStart<=$right){
            $temp[] = $this->arr[$rightStart];
            $rightStart++;
        }
        foreach ($temp as $key=>$value){
            $this->arr[$left+$key]=$value;
        }

    }
}



$arr = [ 7, 5, 6, 4 ];
//$arr      = [ 8, 7, 6, 5, 4, 3, 2, 1 ];
//$arr = [4,5,6,7];
//$arr = [2,4,3,5,1];
$solution = new  Solution();
//$solution = new  Solutions();
$solution = $solution->reversePairs($arr);
var_dump($solution);
exit();