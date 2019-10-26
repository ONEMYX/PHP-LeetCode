<?php

class MovingAverage
{


    private $queue = [];
    private $size = 0;

    /**
     * Initialize your data structure here.
     * @param Integer $size
     */
    function __construct($size)
    {
        $this->size=$size;
    }

    /**
     * @param Integer $val
     * @return Float
     */
    function next($val)
    {
        if (count($this->queue)>=$this->size){
            array_shift($this->queue);
        }
        $this->queue[]=$val;
        return array_sum($this->queue)/count($this->queue);
    }
}

//Your MovingAverage object will be instantiated and called as such:
$size = 3;
$val = 1;
$obj = new MovingAverage($size);
$ret_1 = $obj->next($val);
$ret_1 = $obj->next(2);
var_dump($ret_1);
