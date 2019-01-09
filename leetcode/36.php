<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 19:51
 */
//有效的数独
include('../function.php');

class Sudoku{
    function suDo($arr)
    {
        $return = $this->suDo_one($arr);
        if ($return)
            $a[] = '条件一完成';
        else
            $a[] = '条件一失败';
        $return = $this->suDo_tow($arr);
        if ($return)
            $a[] = '条件二完成';
        else
            $a[] = '条件二失败';
        $return = $this->suDo_three($arr);
        if ($return)
            $a[] = '条件三完成';
        else
            $a[] = '条件三失败';
        return $a;
    }
    //1. 数字 1-9 在每一行只能出现一次。
    function suDo_one($arr)
    {
        foreach ($arr as $key=>$value){
            $return = $this->array_repeat($value);
            if ($return){
                return true;
            }else{
                return false;
            }
        }
    }
    //2. 数字 1-9 在每一列只能出现一次。
    function suDo_tow($arr)
    {
        foreach ($arr as $key=>$value){
            $b = $this->array_line($arr,$key);
            $return = $this->array_repeat($b);
            if ($return){
                return true;
            }else{
                return false;
            }
        }
    }
    //3. 数字 1-9 在每一个以粗实线分隔的 3x3 宫内只能出现一次。
    function suDo_three($arr)
    {
        for ($i=0;$i<3;$i++){
            for ($j=0;$j<3;$j++){
                $a = $i*3;
                $b = $j*3;
                $array = $this->array_three($arr,$a,$b);
                $return = $this->array_repeat($array);
                if ($return){
                    return true;
                }else{
                    return false;
                }
            }
        }
    }
    //拿出3*3的数组
    function array_three($arr,$a,$b){
        $return = [];
        for ($i=0;$i<3;$i++){
            for ($j=0;$j<3;$j++){
                $one = $a+$i;
                $two = $b+$j;
                $return[] = $arr[$one][$two];
            }
        }
        return $return;
    }
    //拿出x列的数组
    function array_line($arr,$i){
        $num = count($arr);
        $b = [];
        for ($j=0;$j<$num;$j++){
            $b[] = $arr[$j][$i];
        }
        return $b;
    }
    //相同的
    function array_repeat($arr){
        $b = [];
        foreach ($arr as $key=>$value){
            if ($value != '.'){
                if (in_array($arr[$key],$b)){
                    return false;
                }else{
                    $b[]=$arr[$key];
                }
            }
        }
        return true;
    }
}



$a = [
    ["5","3",".",".","7",".",".",".","."],
    ["6",".",".","1","9","5",".",".","."],
    [".","9","8",".",".",".",".","6","."],
    ["8",".",".",".","6",".",".",".","3"],
    ["4",".",".","8",".","3",".",".","1"],
    ["7",".",".",".","2",".",".",".","6"],
    [".","6",".",".",".",".","2","8","."],
    [".",".",".","4","1","9",".",".","5"],
    [".",".",".",".","8",".",".","7","9"]
];
$suDo = new Sudoku();
$b = $suDo->suDo($a);
p($b);



