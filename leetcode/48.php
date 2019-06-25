<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 21:04
 */
//旋转图像

//include('../function.php');

function rotate($arr)
{
    $num = count($arr)-1;
    var_dump($num);
    $b = [];

    for ($j=0;$j<=$num;$j++){
        $k=0;
        for ($i=$num;$i>=0;$i--){
            $b[$j][$k] = $arr[$i][$j];
            ++$k;
        }
    }
    return $b;
}
class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $num = count($matrix)-1;
        var_dump($num);
        $b = [];

        for ($j=0;$j<=$num;$j++){
            $k=0;
            for ($i=$num;$i>=0;$i--){
                $b[$j][$k] = $matrix[$i][$j];
                ++$k;
            }
        }
        $matrix =$b;
    }
}

$a =[
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
$suDo = new Solution();
$suDo->rotate($a);
var_dump($a);


