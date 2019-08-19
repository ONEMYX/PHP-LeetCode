<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/19
 * Time: 16:19
 */

//Shuffle an Array


/**
 * @param $arr
 *
 * @return array
 */
function shuffle_arr($arr)
{
    $b      = $arr;
    $return = [];
    $count  = count( $arr );
    $list   = $count - 1;
    while ($list >= 0) {
        $num      = rand( 0, $list );
        $return[] = $b[ $num ];
        unset( $b[ $num ] );
        $list = $list - 1;
        $b    = array_values( $b );
    }
    return $return;
}

//$array = ["Solution","shuffle","reset","shuffle"];
//$b = shuffle_arr($array);
//var_dump($b);


/**
 * @property Integer[] nums
 */
class Solution
{
    /**
     * @param Integer[] $nums
     */
    function __construct($nums)
    {
        $this->nums = $nums;
    }

    /**
     * Resets the array to its original configuration and return it.
     *
     * @return Integer[]
     */
    function reset()
    {
        return $this->nums;
    }

    /**
     * Returns a random shuffling of the array.
     *
     * @return Integer[]
     */
    function shuffle()
    {
        $nums  = $this->nums;
        $count = count( $nums ) - 1;
        for ($i = 0; $i <= $count; $i++) {
            $key          = rand( $i, $count );
            $temp         = $nums[ $key ];
            $nums[ $key ] = $nums[ $i ];
            $nums[ $i ]   = $temp;
        }
        return $nums;
    }
}

/**
 * Your Solution object will be instantiated and called as such:
 * $obj = Solution($nums);
 * $ret_1 = $obj->reset();
 * $ret_2 = $obj->shuffle();
 */
$nums  = [1, 2, 3];
$nums =["Solution","shuffle","reset","shuffle"];
$nums =[[[1,2,3]],[],[],[]];
$obj   = new Solution( $nums );
$ret_1 = $obj->reset();
$ret_2 = $obj->shuffle();
var_dump( $ret_1 );
var_dump( $ret_2 );