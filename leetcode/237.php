<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 11:27
 */


// 删除链表中的节点
include('../function.php');
class  Node{
    public $data = '';
    public $next = null;
    function __construct($data)
    {
        $this->data = $data;
    }
    // 遍历节点
    function countNode($head)
    {
        $cur = $head;
        $i = 0;
        while (!is_null($cur->next)){
            ++$i;
            $cur = $cur->next;
        }
        return $i;
    }
    //添加节点
    function addNode($head,$data)
    {
        $curl = $head;
        while(!is_null($curl->next)){
            $curl = $curl->next;
        }
        $next = new Node($data);
        $curl->next = $next;
    }
    //根据节点位置删除节点
    function delNodeNum($head,$no)
    {
        if ($no>$this->countNode($head))
            return false;
        $cur = $head;
        for ($i=0;$i<$no-1;$i++){
            $cur = $cur->next;
        }
        $cur->next = $cur->next->next;
    }
    //根据 节点 value删除节点
    function delNodeValue($head,$value)
    {
        $cur = $head;
        $i = 0;
        while (!is_null($cur->next)){
            $cur = $cur->next;
            ++$i;
            if ($cur->data == $value){
                $this->delNodeNum($head,$i);
            }
        }
        return ;
    }
    //遍历链表
    function showNode($head)
    {
        $cur = $head;
        while(!is_null($cur->next)){
            $cur = $cur->next;
            echo $cur->data,'<br>';
        }
    }
}

$head = new Node('null');

$head->addNode($head,'a');
$head->addNode($head,'b');
$head->addNode($head,'c');
$head->addNode($head,'d');
//遍历
$head->showNode($head);
echo '<hr>';
$head->delNodeValue($head,'b');
//遍历
$head->showNode($head);
echo '<hr>';


