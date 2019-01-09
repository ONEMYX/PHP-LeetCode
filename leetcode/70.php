<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/5
 * Time: 20:01
 */

include ('../function.php');



function node($num)
{
    if ($num==1){
        return 1;
    }elseif($num == 2){
        return 2;
    }else{
        return node($num-1)+ node($num-2);
    }
}
$a = node(4);
p($a);