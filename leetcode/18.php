<?php

class Solution
{

    /**
     * @param array   $nums
     * @param Integer $target
     *
     * @return Integer[][]
     */
    function fourSum($nums, $target)
    {
        $len = count( $nums );
        if ($len < 4) return [];
        sort( $nums );
        $arr = [];
        for ($i = 0; $i < $len - 3; $i++) {
            if (($nums[$i] + $nums[$i + 1] + $nums[$i + 2] + $nums[$i + 3]) > $target) {
                break;
            }
            if (($nums[$i] + $nums[$len - 3] + $nums[$len - 2] + $nums[$len - 1]) < $target) {
                continue;
            }
            if ($i != 0 && $nums[$i] == $nums[$i - 1])
                continue;
            for ($j = $i + 1; $j < $len - 2; $j++) {
                if (($nums[$i] + $nums[$j] + $nums[$j + 1] + $nums[$j + 2]) > $target) break;
                if (($nums[$i] + $nums[$j] + $nums[$len - 2] + $nums[$len - 1]) < $target) continue;
                if ($j != ($i + 1) && $nums[$j] == $nums[$j - 1]) continue;

                $L = $j + 1;
                $R = $len - 1;
                while ($L < $R) {
                    $sum = $nums[$i] + $nums[$j] + $nums[$L] + $nums[$R];
                    if ($sum == $target) {
                        $arr[] = [$nums[$i], $nums[$j], $nums[$L], $nums[$R]];
                        while ($L < $R && $nums[$L] == $nums[$L + 1]) {
                            $L++;
                        }
                        while ($L < $R && $nums[$R] == $nums[$R - 1]) {
                            $R--;
                        }
                        $L++;
                        $R--;
                    } elseif ($sum < $target) $L++;
                    elseif ($sum > $target) $R--;
                }
            }
        }
        return $arr;
    }
}

$nums   = [1, 0, -1, 0, -2, 2];
$nums   = [0, 0, 0, 0];
$nums   = [-3, -2, -1, 0, 0, 1, 2, 3];
$target = 0;
$solu   = new Solution();
$B      = $solu->fourSum( $nums, $target );

var_dump( $B );