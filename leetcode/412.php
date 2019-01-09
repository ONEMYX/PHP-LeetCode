<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/20
 * Time: 15:49
 */

//Fizz Buzz

/**
 * @param int $n
 * @return string
 */
function fizzBuzz($n=0)
{
    if ($n<=0||!is_numeric($n))
        return 'error';
    $i = 1;
    $out = $i;
    while ($i <= $n){
        if ($i%3==0){
            $out = "Fizee";
            if ($i%5==0){
                $out .= " Buzz";
            }
        }elseif($i%5 == 0){
            $out = "Buzz";
        }else{
            $out = $i;
        }
       ++$i;
        echo $out;
        echo '<br>';
    }
}
fizzBuzz(16);