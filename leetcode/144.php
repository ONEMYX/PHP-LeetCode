<?php

/**
 * Definition for a binary tree node.
 */
class TreeNode
{
    public $val   = null;
    public $left  = null;
    public $right = null;

    function __construct ( $val = 0, $left = null, $right = null )
    {
        $this->val   = $val;
        $this->left  = $left;
        $this->right = $right;
    }
}

class Solution
{

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function preorderTraversal ( TreeNode $root )
    {

        if (empty( $root )) {
            return [];
        }
        //前序遍历代码
        $rootV = [ $root->val ];

        $left  = $this->preorderTraversal( $root->left );
        $right = $this->preorderTraversal( $root->right );

        //注意参数顺序
        return array_merge( $rootV, $left, $right );

    }
}

$nums = [ 8, 1, 2, 2, 3 ];
$adn  = new Solution();
//p(num_and($arr,$num));
var_dump( $adn->smallerNumbersThanCurrent( $nums ) );