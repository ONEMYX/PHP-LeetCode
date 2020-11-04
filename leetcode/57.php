<?php

class Solution
{

    /**
     * @param Integer[][] $intervals
     * @param Integer[]   $newInterval
     * @return void
     */
    function insert ( array $intervals, array $newInterval )
    {
        $arr    = [];
        $one    = $newInterval[ 0 ];
        $two    = $newInterval[ 1 ];
        $status = 1;
        foreach ($intervals as $key => $value) {
            $start = $value[ 0 ];
            $end   = $value[ 1 ];
            switch ($status) {
                case 1:
                    $temp   = $this->one( $one, $two, $start, $end, $arr );
                    $arr    = $temp[ 'arr' ];
                    $status = $temp[ 'status' ];
                    break;
                case 2:
                    $temp   = $this->two( $two, $start, $end, $arr );
                    $arr    = $temp[ 'arr' ];
                    $status = $temp[ 'status' ];
                    break;
                default:
                    $arr[] = $start;
                    $arr[] = $end;
            }

        }
        if ($status == 1) {
            $arr[] = $one;
            $arr[] = $two;
        } elseif ($status == 2) {
            $end = end( $intervals );
            if ($two > $end[ 1 ]) {
                $arr[] = $two;
            } else {
                $arr[] = $end[ 1 ];
            }
        }
        $temp = [];
        $size = [];
        $i    = 1;
        foreach ($arr as $value) {
            $size[] = $value;
            if ($i != 1) {
                $temp[] = $size;
                $i      = 1;
                $size   = [];
            } else {
                $i++;
            }
        }
        return $temp;
    }

    function one ( $one, $two, $start, $end, $arr )
    {
        $status = 1;
        if ($two < $start) {
            $arr[]  = $one;
            $arr[]  = $two;
            $arr[]  = $start;
            $arr[]  = $end;
            $status = 3;
        } elseif ($two > $start) {
            if ($one > $end) {
                $arr[] = $start;
                $arr[] = $end;
            } elseif ($one < $end) {
                if ($one <= $start) {
                    $arr[]  = $one;
                    $status = 2;
                } else {
                    $arr[]  = $start;
                    $status = 2;
                }
                if ($two<$end){
                    $arr[]=$end;
                    $status =3;
                }
            } else {
                $arr[]  = $start;
                $status = 2;
            }
        } else {
            $arr[]  = $one;
            $arr[]  = $end;
            $status = 3;
        }
        return [
            'arr'    => $arr,
            'status' => $status,
        ];

    }

    function two ( $two, $start, $end, $arr )
    {
        $status = 2;
        if ($two < $start) {
            $arr[]  = $two;
            $arr[]  = $start;
            $arr[]  = $end;
            $status = 3;
        } elseif ($two > $start) {
            if ($two <= $end) {
                $arr[]  = $end;
                $status = 3;
            }
        } else {
            $arr[]  = $end;
            $status = 3;
        }
        return [
            'arr'    => $arr,
            'status' => $status,
        ];
    }
}


$intervals   = [ [ 1, 5 ] ];
$newInterval = [ 2, 3 ];
//$intervals   = [ [ 1, 5 ] ];
//$newInterval = [ 5, 7 ];
//$intervals   = [ [ 1, 5 ],[6,8] ];
//$newInterval = [ 3, 7 ];
//$intervals   = [ [ 0, 5 ],[8,9] ];
//$newInterval = [ 3, 4 ];
$intervals   = [ [ 0, 5 ],[9,12] ];
$newInterval = [ 7, 16 ];




$adn = new Solution();
var_dump( $adn->insert( $intervals, $newInterval ) );

