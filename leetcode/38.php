<?php

class Solution
{

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n)
    {
        $num ="1";
        for ($i=1;$i<$n;$i++){
            $num = $this->one($num);
        }
        return $num;
    }

    function one($num){
        $i       = 0;
        $len     = strlen($num);
        $request = '';
        while ($i < $len) {
            $temp = substr($num, $i, 1);
            $i++;
            $data = $this->text($temp, $i, $num, $len);
            $i    = $data['i'];
            $j    = $data['j'];
            $request .= "{$j}" . "{$temp}";
        }
        return $request;
    }

    function text($temp, $i, $num, $len, $j = 1)
    {
        while ($i < $len) {
            if (substr($num, $i,1) == $temp) {
                $j++;$i++;
                $this->text($temp, $i, $num, $len, $j);
            } else {
                return [
                    'i' => $i,
                    'j' => $j
                ];
            }
        }
        return [
            'i' => $i,
            'j' => $j
        ];

    }
}


$t    = 10;
$solu = new Solution();
$B    = $solu->countAndSay($t);
var_dump($B);