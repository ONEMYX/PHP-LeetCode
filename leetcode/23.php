<?php

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
     * @param ListNode[] $lists
     *
     * @return ListNode
     */
    function mergeKLists($lists)
    {
        $len = count( $lists );
        if ($len <= 1) {
            return current( $lists );
        }
        $temp = [];
        for ($i = 0, $j = 1; $i < $len; $i = $i + 2, $j = $j + 2) {
            if (isset( $lists[$j] )) {
                $temp[] = $this->mergeTwoLists( $lists[$i], $lists[$j] );
            } else {
                $temp[] = $lists[$i];
            }
        }
        $list = $this->mergeKLists($temp);
        return $list;
    }

    function mergeTwoLists($l1, $l2)
    {
        $dummy = new ListNode( 0 );
        $ptr   = $dummy;
        while ($l1 != null || $l2 != null) {
            if ($l1 == null) {
                $ptr->next = $l2;
                break;
            } elseif ($l2 == null) {
                $ptr->next = $l1;
                break;
            } else {
                if ($l1->val <= $l2->val) {
                    $ptr->next = new ListNode( $l1->val );
                    $l1        = $l1->next;
                    $ptr       = $ptr->next;
                } else {
                    $ptr->next = new ListNode( $l2->val );
                    $l2        = $l2->next;
                    $ptr       = $ptr->next;
                }
            }
        }
        return $dummy->next;
    }
    function one($lists){
        $tmp = array();
        foreach($lists as $l){
            while($l){
                $tmp[] = $l->val;
                $l = $l->next;
            }
        }
        sort($tmp);

        $back = new ListNode(-1);

        $g = $back;
        foreach($tmp as $v){
            $g->next = new ListNode($v);
            $g = $g->next;
        }
        return $back->next;
    }
}


$arr     = [];
$a       = new ListNode( 1 );
$b       = new ListNode( 4 );
$c       = new ListNode( 5 );
$b->next = $c;
$a->next = $b;
$arr[]   = $a;
$a       = new ListNode( 1 );
$b       = new ListNode( 3 );
$c       = new ListNode( 4 );
$b->next = $c;
$a->next = $b;
$arr[]   = $a;

$a        = new ListNode( 2 );
$b        = new ListNode( 6 );
$a->next  = $b;
$arr[]    = $a;
$solution = new Solution();
$list     = $solution->one( $arr );
print_r( $list );