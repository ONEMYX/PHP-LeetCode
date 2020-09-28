<?php

class TreeNode
{
    public $val   = null;
    public $left  = null;
    public $right = null;

    function __construct ( $value )
    {
        $this->val = $value;
    }
}

class Solution
{


    /**
     * @param Integer[] $inorder   中序
     * @param Integer[] $postorder 后续
     * @return TreeNode
     */
    function buildTree ( array $inorder, array $postorder )
    {
        $iLen = count( $inorder );
        $pLen = count( $postorder );
        if ($iLen == 0 || $iLen != $pLen) return null;
        return $this->build( $postorder, 0, $pLen - 1, array_flip( $inorder ), 0, $iLen - 1 );
    }

    private function build ( $postorder, $postL, $postR, $inHash, $inL, $inR )
    {
        if ($postL > $postR || $inL > $inR) return null;
        if ($postL === $postR) return new TreeNode( $postorder[ $postR ] );

        $rootVal = $postorder[ $postR ];
        $pivot   = $inHash[ $rootVal ];
        $root    = new TreeNode( $rootVal );

        $root->left  = $this->build( $postorder, $postL, $postL + $pivot - $inL - 1, $inHash, $inL, $pivot - 1 );
        $root->right = $this->build( $postorder, $postL + $pivot - $inL, $postR - 1, $inHash, $pivot + 1, $inR );

        return $root;
    }


}

$inorder   = [ 9, 3, 15, 20, 7 ];
$postorder = [ 9, 15, 7, 20, 3 ];
$adn       = new Solution();
//p(num_and($arr,$num));
var_dump( $adn->buildTree( $inorder, $postorder ) );