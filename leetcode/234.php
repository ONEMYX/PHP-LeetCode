<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 17:37
 */
//回文链表

include ('../function.php');
class Nodes extends Node{
    public function Palindrome($node)
    {
        $cur = $node;
        $sum = 0;
        $i =1;
        $arr = [];
        while(!is_null($cur->next)){
            $arr[] = $cur->next->data;
            $sum = $sum +$cur->next->data*$i;
            ++$i;
            $cur = $cur->next;
        }
        $i = 1 ;
        $b[] = end($arr);
        $sum = $sum - current($arr)*$i;
        ++$i;
        while (prev($arr)){
            $sum = $sum - current($arr)*$i;
            p(current($arr));
            p($i);
            echo '<hr>';
            ++$i;
        }
        if ($sum == 0)
            echo  'true';
        else
            echo 'false';
    }
}
$data = new  nodes(null);
$a = ['1','2','3','2','1'];
$data->addNode($data,$a);
$data->showNode($data);
echo '<hr>';
$return = $data->Palindrome($data);
p($return);