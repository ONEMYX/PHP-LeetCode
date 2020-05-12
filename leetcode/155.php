<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/19
 * Time: 19:34
 */

//最小栈

/**
 * Class Stack
 */
class MinStack
{
    private $arr = [];
    private $min = [];

    /**
     * initialize your data structure here.
     */
    function __construct()
    {

    }

    /**
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        $this->arr[] = $x;
        $minNum = end($this->min);
        if (!isset($this->min[0]) || $minNum > $x) {
            $this->min[] = $x;
        } else {
            $this->min[] = $minNum;
        }
    }

    /**
     * @return NULL
     */
    function pop()
    {
        array_pop($this->arr);
        array_pop($this->min);
    }

    /**
     * @return Integer
     */
    function top()
    {
        return end($this->arr);
    }

    /**
     * @return Integer
     */
    function getMin()
    {
        return end($this->min);
    }
}

$Stack = new MinStack();
$Stack->push(2);
$Stack->push(1);
$Stack->push(3);
$Stack->push(4);
$Stack->push(5);
//$Stack->push(6);
//$Stack->push(7);
//$Stack->push(8);
$Stack->push(-9);
//$Stack->push(10);
//$Stack->push(11);
//$Stack->outPut();
$b = $Stack->top();
$a = $Stack->getMin();
var_dump($b);
