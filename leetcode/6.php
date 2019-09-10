<?php

class Solution
{

    /**
     * @param String  $s
     * @param Integer $numRows
     *
     * @return String
     */
    function convert($s, $numRows)
    {
        $len    = strlen( $s );
        $status = $num = 0;
        $arr    = [];
        if ($numRows == 1) {
            return $s;
        }
        for ($i = 0; $i <= $len; $i++) {
            if (!isset( $s{$i} )) {
                break;
            }
            switch ($status) {
                case 0:
                    $arr[$num][] = $s{$i};
                    if ($num == $numRows - 1) {
                        $num--;
                        $status = 1;
                    } else {
                        $num++;
                    }
                    break;
                case 1:
                    $arr[$num][] = $s{$i};
                    if ($num == 0) {
                        $num++;
                        $status = 0;
                    } else {
                        $num--;
                    }
            }
        }
        $str = '';
        foreach ($arr as $value) {
            foreach ($value as $item) {
                $str .= $item;
            }
        }
        return $str;
    }
}

$s        = 'LEETCODEISHIRING';
$s        = 'LEETCODEISHIRING';
$num      = 3;
$num      = 4;
$Solution = new Solution();
//$data     = $Solution->convert( $s, $num );
$data = $Solution->one( $s, $num );
var_dump( $data );