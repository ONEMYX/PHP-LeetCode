<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 16:52
 */

//反转链表


class unNodes extends Node
{
    public function unNode($head)
    {
        $cur = $head;
        $i   = 0;
        $arr = [];
        while (!is_null( $cur->next )) {
            ++$i;
            $cur   = $cur->next;
            $arr[] = $cur->data;
        }
        $arr  = $this->unarr( $arr );
        $head = new  unNodes( null );
        $head->addNode( $head, $arr );
        return $head;
    }

    /**
     * 数组反转
     *
     * @param $arr
     *
     * @return array|void
     */
    public function unarr($arr)
    {
        if (!end( $arr ))
            return;
        $b   = [];
        $b[] = end( $arr );
        while (prev( $arr )) {
            $b[] = current( $arr );
        }
        return $b;
    }
}


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
$Solution->reverseList( $List );

