<?php

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $temp = $strs[0]??"";
        foreach ($strs as $value){
            $temp = $this->text($temp, $value);
        }
        return $temp;
    }

    public function text($a, $b)
    {
        $len = strlen($a);
        for ($len; $len > 0; $len--) {
            $temp = substr($a, 0, $len);
            if ($temp == substr($b,0,$len)){
                return $temp;
            }
        }
        return "";
    }

}


$t    = ["flower", "flow", "flight"];
//$t    = ["c","acc","ccc"];
//$t    =  ["dog","racecar","car"];
//$t    =  ["a"];
//$t    =  [];
$solu = new Solution();
$B    = $solu->longestCommonPrefix($t);
var_dump($B);