<?php

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
     *
     * @return ListNode
     */
    function swapPairs($head)
    {
        $dummy       = new ListNode( 0 );
        $dummy->next = $head;
        $ptr1        = $dummy;
        $ptr2        = $dummy->next;
        while ($ptr2->next != null) {
            $temp       = $ptr2->next;
            $ptr2->next = $temp->next;
            $temp->next = $ptr2;
            $ptr1->next = $temp;


            if (isset( $ptr1->next->next )) {
                $ptr1 = $ptr1->next->next;
            } else {
                break;
            }
            if (isset( $ptr2->next )) {
                $ptr2 = $ptr2->next;
            } else {
                break;
            }
        }
        return $dummy->next;
    }
}


$a       = new ListNode( 1 );
$b       = new ListNode( 2 );
$c       = new ListNode( 3 );
$d       = new ListNode( 4 );
$c->next = $d;
$b->next = $c;
$a->next = $b;
$a = new ListNode(1);
$solution = new Solution();
$list     = $solution->swapPairs( $a );
print_r( $list );
