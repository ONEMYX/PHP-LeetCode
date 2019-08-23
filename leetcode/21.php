<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 17:25
 */

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
     * @param ListNode $l1
     * @param ListNode $l2
     *
     * @return ListNode
     */
    function mergeTwoLists($l1, $l2)
    {
        if ($l1->val>$l2->val){

        }
    }
}


$a       = new ListNode( 1 );
$b       = new ListNode( 2 );
$c       = new ListNode( 3 );
$b->next = $c;
$a->next = $b;
var_dump( $a );
$aa       = new ListNode( 1 );
$b        = new ListNode( 3 );
$c        = new ListNode( 4 );
$b->next  = $c;
$aa->next = $b;
var_dump( $aa );
$solution = new Solution();
$solution->mergeTwoLists( $a, $aa );


