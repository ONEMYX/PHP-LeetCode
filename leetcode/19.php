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
        $dummy = new ListNode(0);
        $dummy->next = $head;
        $ptr1 = $dummy;
        $ptr2 = $dummy;
        for($i=0;$i<$n+1;$i++){
            $ptr1 = $ptr1->next;
        }
        while($ptr1!=null){
            $ptr1 = $ptr1->next;
            $ptr2 = $ptr2->next;
        }
        $ptr2->next = $ptr2->next->next;
        return $dummy->next;

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
print_r($B);
