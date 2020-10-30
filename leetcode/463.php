<?php

class Solution
{

    /**
     * @param Integer[][] $grid
     * @return int
     */
    function islandPerimeter ( array $grid )
    {
        $len  = 0;
        $temp = [
            [ -1, 0 ],
            [ 1, 0 ],
            [ 0, -1 ],
            [ 0, 1 ],
        ];
        foreach ($grid as $key => $value) {
            foreach ($value as $k => $item) {
                if ($item == 1) {
                    $size = 4;
                    //判断四周是否 有岛屿
                    foreach ($temp as $t) {
                        //横向
                        $a = $key + $t[ 0 ];
                        //纵向
                        $b = $k + $t[ 1 ];
                        if (isset( $grid[ $a ][ $b ] ) && $grid[ $a ][ $b ] == 1) {
                            $size--;
                        }
                    }
                    $len +=$size;
                }
            }
        }
        return $len;
    }
}


$nums = [
    [ 0, 1, 0, 0 ],
    [ 1, 1, 1, 0 ],
    [ 0, 1, 0, 0 ],
    [ 1, 1, 0, 0 ]
];
$adn  = new Solution();
//p(num_and($arr,$num));
var_dump( $adn->islandPerimeter( $nums ) );