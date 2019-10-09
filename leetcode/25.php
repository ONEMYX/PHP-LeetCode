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
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function reverseKGroup($head, $k) {

    }


    function reverseList($head)
    {
        $p    = null;
        $curr = $head;
        while ($curr) {
            $next       = $curr->next;
            $curr->next = $p;
            $p          = $curr;
            $curr       = $next;
        }
        return $p;
    }
}



function saveList($arr)
{
    $head = new ListNode( '' );
    $p    = $head;
    foreach ($arr as $value) {
        $p->next = new ListNode( $value );
        $p       = $p->next;
    }
    return $head->next;
}

$arr      = [1, 2, 3, 4, 5];
$List     = saveList( $arr );
$Solution = new Solution();
$a = $Solution->reverseList( $List );
var_dump($a);