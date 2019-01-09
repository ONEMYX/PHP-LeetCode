<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 16:52
 */

//反转链表

include ('../function.php');

class unNodes extends Node{
    public function unNode($head){
        $cur = $head;
        $i = 0;
        $arr = [];
        while(!is_null($cur->next)){
            ++$i;
            $cur = $cur->next;
            $arr[] = $cur->data;
        }
        $arr = $this->unarr($arr);
        $head = new  unNodes(null);
        $head->addNode($head,$arr);
        return $head;
    }

    /**
     * 数组反转
     * @param $arr
     * @return array|void
     */
    public function unarr($arr)
    {
        if (!end($arr))
            return ;
        $b =[];
        $b[] = end($arr);
        while (prev($arr)){
            $b[] = current($arr);
        }
        return $b;
    }
}
$data = new  unNodes(null);
$a = ['11','22','33','44'];
$data->addNode($data,$a);
$data->showNode($data);
echo '<hr>';
$node = $data->unNode($data);
//$data->showNode($node);