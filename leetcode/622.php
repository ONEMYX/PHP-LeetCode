<?php

class MyCircularQueue
{

    private $queue = [];
    private $size;

    /**
     * Initialize your data structure here. Set the size of the queue to be k.
     * @param Integer $k
     */
    function __construct($k)
    {
        $this->size = $k;
    }

    /**
     * 插入
     * Insert an element into the circular queue. Return true if the operation is successful.
     * @param Integer $value
     * @return Boolean
     */
    function enQueue($value)
    {
        if (count($this->queue) < $this->size) {
            $this->queue[] = $value;
            return true;
        }
        return false;
    }

    /**
     * 删除
     * Delete an element from the circular queue. Return true if the operation is successful.
     * @return Boolean
     */
    function deQueue()
    {
        if ($this->isEmpty()) {
            return false;
        } else {
            array_shift($this->queue);
            return true;
        }
    }

    /**
     * 从头获取一个元素
     * Get the front item from the queue.
     * @return Integer
     */
    function Front()
    {
        return count($this->queue) ? reset($this->queue) : -1;
    }

    /**
     * 返回最后一个元素
     * Get the last item from the queue.
     * @return Integer
     */
    function Rear()
    {
        return count($this->queue) ? end($this->queue) : -1;
    }

    /**
     * 是否为空
     * Checks whether the circular queue is empty or not.
     * @return Boolean
     */
    function isEmpty()
    {
        return !count($this->queue) ? true : false;
    }

    /**
     * 是否填满
     * Checks whether the circular queue is full or not.
     * @return Boolean
     */
    function isFull()
    {
        return count($this->queue) >= $this->size ? true : false;
    }
}


//Your MyCircularQueue object will be instantiated and called as such:
$k = 3;
$value = 1;
$obj = new MyCircularQueue($k);
$ret_1 = $obj->enQueue($value);
$ret_2 = $obj->deQueue();
$ret_3 = $obj->Front();
$ret_4 = $obj->Rear();
$ret_5 = $obj->isEmpty();
$ret_6 = $obj->isFull();