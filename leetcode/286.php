<?php

class Solution
{
    private $queue = [];
    private $queueTwo = [];
    private $rooms;
    private $status = false;
    private $log = [];

    /**
     * @param Integer[][] $rooms
     * @return NULL
     */
    function wallsAndGates(&$rooms)
    {
        $this->rooms = $rooms;
        foreach ($rooms as $key => $value) {
            foreach ($value as $k => $item) {
                if ($item != 2147483647) {
                    continue;
                }
                $this->queue[] = [$key, $k];
                $this->log = $this->queue;
                $rooms[$key][$k] = $this->find($key, $k);
            }
        }
    }

    function find($key, $k)
    {
        $num = 0;
        // 判断它是否有节点如果有并不是0放入队列。
        while (!$this->status) {
            $num++;
            //查找入队
            foreach ($this->queue as $value) {
                $this->one($value[0], $value[1]);
            }
            if ($this->status) {
                $this->queue = [];
                $this->queueTwo = [];
                $this->status = false;
                return $num;
            }
            if (empty($this->queueTwo)) {
                $this->queue = [];
                return 2147483647;
            } else {
                $this->log = array_merge($this->log, $this->queue);
                $this->queue = $this->queueTwo;
                $this->queueTwo = [];
            }
        }
    }

    function one($key, $k)
    {
        $arr = [
            [$key - 1, $k],
            [$key + 1, $k],
            [$key, $k - 1],
            [$key, $k + 1],
        ];
        foreach ($arr as $value) {
            if (!in_array($value, $this->log)) {
                $this->oneCheck($value[0], $value[1]);
            }
        }
    }

    function oneCheck($key, $k)
    {
        if (isset($this->rooms[$key][$k])) {
            if ($this->rooms[$key][$k] == '0') {
                $this->status = true;
            } elseif ($this->rooms[$key][$k] == 2147483647) {
                $this->queueTwo[] = [$key, $k];
            }
        }
    }
}

$rooms = [
    [2147483647, -1, 0, 2147483647],
    [2147483647, 2147483647, 2147483647, -1],
    [2147483647, -1, 2147483647, -1],
    [0, -1, 2147483647, 2147483647],
];
$rooms = [[2147483647, 2147483647], [2147483647, 2147483647]];


$Solution = new Solution();
$Solution->wallsAndGates($rooms);

var_dump($rooms);