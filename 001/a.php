<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/30
 * Time: 19:07
 */

class Node{
    public $data = '';
    public $next = null;
    function __construct($data)
    {
        $this->data = $data;
    }
    //链表有几个节点
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
    //增加节点
    function addNode($head,$data)
    {
        $cur = $head;
        while (!is_null($cur->next)){
            $cur = $cur->next;
        }
        $next = new Node($data);
        $cur->next = $next;
    }
    // 插入$no 后
    function insertNode($head,$data,$no)
    {
        if ($no>$this->countNode($head))
            return false;
        $cur = $head;
        $new = new Node($data);
        for ($i=0;$i<$no;$i++){
            $cur = $cur->next;
        }
        $new->next = $cur->next;
        $cur->next = $new;
    }
    //删除 第$no 个节点
    function delNode($head,$no)
    {
        if ($no>$this->countNode($head))
            return false;
        $cur = $head;
        for ($i=0;$i<$no-1;$i++){
            $cur = $cur->next;
        }
        $cur->next = $cur->next->next;
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
//遍历
$head->showNode($head);
echo '<hr>';
//插入
$head->insertNode($head,'d',1);
echo '<hr>';
//遍历
$head->showNode($head);
echo '<hr>';
//删除
$head->delNode($head,2);
echo '<hr>';
//遍历
$head->showNode($head);

//添加一条信息.
//添加一条信息.
//1111