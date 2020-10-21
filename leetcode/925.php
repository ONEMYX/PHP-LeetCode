<?php

class Solution
{

    /**
     * @param String $name
     * @param String $typed
     * @return bool
     */
    function isLongPressedName ( string $name, string $typed )
    {

        $i = $j = 1;

        $nLen = strlen( $name );
        $tLen = strlen( $typed );
        if ($name[ 0 ] != $typed[ 0 ]) return false;
        if ($name[ $nLen - 1 ] != $typed[ $tLen - 1 ]) return false;

        while ($name[ $i ] && $typed[ $j ]) {
            if ($name[ $i ] == $typed[ $j ]) {
                $i++;
                $j++;
            } else {
                if ($i == 0) {
                    $j++;
                } else {
                    if ($name[ $i - 1 ] == $typed[ $j ]) {
                        $j++;
                    } else {
                        return false;
                    }
                }
            }
        }
        $len = strlen( $name );

        if ($i == $len) {
            return true;
        }
        return false;

    }
}

$name  = 'alex';
$typed = 'aaleexx';
$adn   = new Solution();
//p(num_and($arr,$num));
var_dump( $adn->isLongPressedName( $name, $typed ) );