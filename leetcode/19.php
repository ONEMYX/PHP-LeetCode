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
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $n
     * @return ListNode
     */
    function removeNthFromEnd($head, $n) {

        $count = count($head);
        unset($head[$count-$n]);
        return $head;
    }
}

$t = [1,2,3,4,5];
$n = 2;
$solu = new Solution();
$B    = $solu->removeNthFromEnd($t,$n);
var_dump($B);
