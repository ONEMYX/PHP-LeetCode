<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class ListNode
{
    public $val  = 0;
    public $next = null;

    function __construct ( $val = 0, $next = null )
    {
        $this->val  = $val;
        $this->next = $next;
    }
}

class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function oddEvenList ( $head )
    {
        if($head == null || $head->next == null) return $head;
        $p1 = $head;
        $p2 = $head->next;
        $o1 = $p1;
        $o2 = $p2;
        while($p1 != null && $p1->next->next != null){
            $p1->next = $p1->next->next;
            $p1 = $p2->next;
            $p2->next = $p2->next->next;
            $p2 = $p1->next;
        }
        $p1->next = $o2;
        $p2->next = null;
        return $o1;
    }
}

$arr = [ 1, 2, 3, 4, 5 ];

$head = new ListNode();
$p    = $head;
foreach ($arr as $value) {
    $temp    = new ListNode( $value );
    $p->next = $temp;
    $p       = $p->next;
}
$solution = new Solution();
print_r( $solution->oddEvenList( $head->next ) );
