<?php

class Solution
{
    /**
     * @param Integer $num
     *
     * @return String
     */
    protected $Rules = [
        '1' => '',
        '4' => '',
        '5' => '',
        '9' => '',
    ];
    protected $ones  = [
        '1' => [
            '1' => 'I',
            '4' => 'IV',
            '5' => 'V',
            '9' => 'IX',
        ],
        '2' => [
            '1' => 'X',
            '4' => 'XL',
            '5' => 'L',
            '9' => 'XC',
        ],
        '3' => [
            '1' => 'C',
            '4' => 'CD',
            '5' => 'D',
            '9' => 'CM',
        ],
        '4' => [
            '1' => 'M',
            '4' => '',
            '5' => '',
            '9' => '',
        ]
    ];

    function intToRoman($num)
    {
        $len  = strlen( $num );
        $data = '';
        if ($num == 0) {
            return $data;
        }
        $str = substr( $num, 0, 1 );
        switch ($len) {
            case 1:
                $this->Rules = $this->ones['1'];
                break;
            case 2:
                $this->Rules = $this->ones['2'];

                break;
            case 3:
                $this->Rules = $this->ones['3'];
                break;
            case 4:
                $this->Rules = $this->ones['4'];
                break;
        }
        $data = $this->one( $str );
        if ($len != 1) {
            $num  = substr( $num, 1 );
            $data .= $this->intToRoman( $num );
        }
        return $data;
    }


    function one($num)
    {
        switch ($num) {
            case 0:
                $data = '';
                break;
            case 4:
                $data = $this->Rules['4'];
                break;
            case 5:
                $data = $this->Rules['5'];
                break;
            case 9:
                $data = $this->Rules['9'];
                break;
            default:
                if ($num < 4) {
                    $data = $this->Rules['1'];
                    for ($i = 0; $i < $num - 1; $i++) {
                        $data .= $this->Rules['1'];
                    }
                } else {
                    $data = $this->Rules['5'];
                    for ($i = 0; $i < $num - 5; $i++) {
                        $data .= $this->Rules['1'];
                    }
                }

        }
        return $data;
    }

    function two($num)
    {
        $ruleArr = ['M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I'];
        $intArr  = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
        $data    = '';
        $count =count($intArr);
        $len =0;
        while ($len<$count){
            while ($num >= $intArr[$len]) {
                $num  = $num - $intArr[$len];
                $data .= $ruleArr[$len];
            }
            $len++;
        }
        return $data;
    }


}

$num = 1;
$num = 3;
$num = 4;
$num = 5;
$num = 6;
$num = 8;
$num = 9;
$num = 0;

$num = 10;
//$num = 30;
//$num = 40;
//$num = 50;
//$num = 60;
//$num = 80;
$num = 90;
//$num = 95;
$num = 58;
$num = 3999;


$Solution = new Solution();
$data     = $Solution->two( $num );
var_dump( $data );