<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 15:16
 * @param $a
 * @param string $count
 * @return mixed
 */
//加一

//function jiayi($a, $count = '')
//{
//    if ($count === '') {
//        $count = count($a) - 1;
//    } elseif ($count == 0) {
//        if ($a[$count] == 9) {
//            $a[0] = 1;
//            $num  = count($a);
//            for ($i = 1; $i <= $num; $i++) {
//                $a [$i] = 0;
//            }
//            return $a;
//        }
//    }
//    if ($a[$count] == 9) {
//        $a[$count] = 0;
//        $count     -= 1;
//        $a         = jiayi($a, $count);
//    } else {
//        $a[$count] += 1;
//    }
//    return $a;
//}

class Solution
{
    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        var_dump($digits);
        return $this->sum($digits);
    }

    protected function sum($arr)
    {
        $count = count($arr);
        if ($count == 1) {
            if ($arr[$count - 1] == 9) {
                $arr = [1, 0];
            } else {
                $arr[$count - 1] += 1;
            }
        } else {
            if ($arr[$count - 1] != 9) {
                $arr[$count - 1] += 1;
            } else {
                $arr[$count-1]=0;
                $arr = $this->jia($arr,$count-1);
            }
        }
        return $arr;
    }

    protected function jia($arr, $count)
    {
        if ($count == 0) {
            $arr = array_merge([1], $arr);
        } else {
            if ($arr[$count - 1] == 9) {
                $arr[$count - 1] = 0;
                $arr             = $this->jia($arr, $count - 1);
            } else {
                $arr[$count - 1] += 1;
            }
        }
        return $arr;
    }
}

$arr = [1,2,3];
$a   = new Solution();
$b   = $a->plusOne($arr);
//$a = [9,0,9];
var_dump(($b));