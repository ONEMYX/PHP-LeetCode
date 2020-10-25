<?php

class Solution
{

    /**
     * @param Integer[] $A
     * @return void
     */
    function longestMountain ( array $A )
    {
        $max   = 0;//最长
        $type  = 1;//升序
        $start = 0;//开始位置
        foreach ($A as $key => $value) {
            if ($key == 0) {
                $temp = $value;
                continue;
            }
            if ($type == 1) { //升序
                if ($value < $temp) {    // 小于 可能为转角
                    $len = $key - $start;// 获取长度
                    if ($len > 1) { //升序过。
                        $type = 2;
                        $max  = max( $max, $len + 1 );
                    } else { //只有一个 例子【2，1】
                        $start = $key;
                    }
                } elseif ($value == $temp) {
                    $start = $key;
                }
            } else {
                $len = $key - $start;
                if ($value < $temp) {
                    $max = max( $max, $len + 1 );
                } else {
                    $type = 1;
                    if ($value > $temp) {
                        $start = $key - 1;
                    } else {
                        $start = $key;
                    }
                }
            }
            $temp = $value;
        }
        return $max;
    }
}

$typed = [ 2, 1, 4, 7, 3, 2, 5 ];
//$typed = [ 0, 1, 2, 3, 4, 5, 4, 3, 2, 1, 0 ];
//$typed = [ 0, 1, 0 ];
//$typed = [ 0, 2, 2 ];
//$typed = [ 875, 884, 239, 731, 723, 685 ];
//$typed = [ 1, 2, 0, 2, 0, 2 ];
$typed = [
    0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1,
    1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0,
    0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 0, 1, 1
];
$adn   = new Solution();
//p(num_and($arr,$num));
var_dump( $adn->longestMountain( $typed ) );