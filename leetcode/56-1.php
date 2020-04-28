<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function singleNumbers($nums)
    {
        //1. 时间复杂度 为O(n)  空间复杂度为 1 很大可能是异或
        //2. 但是如果在 只有一个不同 或者一个重复的情况下进行异或会很快得出
        //3. 两个不同的进行异或 最后会得到 $c = $a^$b;  及a b 为不同的。
        //4. 异或的特点  就是把相同的为0 不同的为1
        //5. 所以我们只需要把 $c 中的为1 第一个位置取出来。
        //6. 根据其位置把数组分为两个数组。两个数组中分别 有一个只有出现一次的。
        //7. 用$c 取个数组元素进行异或。
        $c   =  0;
        $one = 1;
        foreach ($nums as $num) {
            $c = $c ^ $num;
        }
        while (!($c & $one)) {
            $one = $one << 1;
        }
        $a = $b =$c;
        foreach ($nums as $num) {
            if ($num & $one)
                $a = $a ^ $num;
            else
                $b = $b ^ $num;
        }
        return [ $a, $b ];
    }
}

$a        = [ 4, 1, 4, 6 ];
//$a        = [3,2,1,3];
$Solution = new Solution();
$a        = $Solution->singleNumbers($a);
var_dump($a);