<?php

class TreeNode
{
    public $val   = null;
    public $left  = null;
    public $right = null;

    function __construct($value)
    {
        $this->val = $value;
    }
}


class Solution
{

    /**
     * @param TreeNode $root
     *
     * @return Integer
     */
    function maxDepth($root, $num = 1)
    {
        if (!$root) {
            return --$num;
        }
        $temp  = ++$num;
        $left  = $this->maxDepth( $root->left, $temp );
        $right = $this->maxDepth( $root->right, $temp );
        return max( $left, $right );
    }

    function one($root)
    {
        return $root === null ? 0 : max( $this->one( $root->left ), $this->one( $root->right ) ) + 1;
    }
}

$a        = new TreeNode( 3 );
$a->left  = new TreeNode( 9 );
$b        = new TreeNode( 20 );
$b->left  = new TreeNode( 15 );
$b->right = new TreeNode( 7 );
$a->right = $b;
$Solution = new Solution();
$aa       = $Solution->one( $a );
var_dump( $aa );