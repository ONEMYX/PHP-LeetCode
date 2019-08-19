<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 14:09
 */
//删除链表的倒数第N个节点

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode
{
    public $val  = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}

class Solution
{


    /**
     * @param ListNode $head
     * @param Integer $n
     *
     * @return ListNode
     */
    function removeNthFromEnd($head, $n)
    {
        $list = new ListNode('head');
        $list->next = $head;
        $size =$n+1;
        for ($i=0;$i<$size;$i++){
            $temp = isset($temp)?$temp->next:$list->next;
        }
        $end = $temp->next;
        while ($end){

            $end = $temp = $temp->next;
            $status = isset($status)?$status->next:$list->next;
        }
        $data =$status->next->next;
        $status->next =$data;
        var_dump($status);exit();

    }
}

$t       = [1, 2, 3, 4, 5];
$n       = 2;
$solu    = new Solution();
$a       = new ListNode(1);
$b       = new ListNode(2);
$c       = new ListNode(3);
$d       = new ListNode(4);
$e       = new ListNode(5);
$a->next = $b;
$b->next = $c;
$c->next = $d;
$d->next = $e;
$n=2;
$B = $solu->removeNthFromEnd($a, $n);
var_dump($B);
