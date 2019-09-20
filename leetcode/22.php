<?php

class Solution
{

    /**
     * @param Integer $n
     *
     * @return String[]
     */
    protected $len;
    protected $a   = '(';
    protected $b   = ')';
    protected $arr = [];

    function generateParenthesis($n)
    {
        $this->len = $n * 2 - 2;
        $this->save( '', 1, $n, $n );
        $this->save( '', 2, $n, $n );
        return $this->arr;
    }

    function save($size, $f = 1, $a = 0, $b = 0)
    {
        if ($f == 1) {
            $a--;
            $size .= $this->a;
        } else {
            $b--;
            $size .= $this->b;
        }


        if ($a == 0 && $b == 0) {
            $this->arr[] = $size;
        } else {
            $sum = $b - $a;
            if ($sum > 0) {
                if ($a == 0 && $b != 0) {
                    $this->save( $size, 2, $a, $b );
                } else {
                    $this->save( $size, 1, $a, $b );
                    $this->save( $size, 2, $a, $b );
                }
            } elseif ($sum == 0) {
                $this->save( $size, 1, $a, $b );
                $this->save( $size, 2, $a, $b );
            }
        }


//        if ($a == 0 && $b == 0) {
//            if ($this->check( $size )) {
//                $this->arr[] = $size;
//            }
//        } else {

//            if ($a == 0 && $b != 0) {
//                $this->save( $size, 2, $a, $b );
//            } elseif ($a != 0 && $b == 0) {
//                $this->save( $size, 1, $a, $b );
//            } else {
//                $this->save( $size, 1, $a, $b );
//                $this->save( $size, 2, $a, $b );
//            }
//        }

//        if (strlen( $size ) >= $this->len) {
//            if ($this->check( $size )) {
//                $this->arr[] = $size;
//            }
//        } else {
//            $this->save( $size, 1 );
//            $this->save( $size, 2 );
//        }

    }

}

$n    = 3;
$solu = new Solution();
$B    = $solu->generateParenthesis( $n );
var_dump( $B );