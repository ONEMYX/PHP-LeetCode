<?php

class Solution
{
    private $queue = [];
    private $rooms;

    /**
     * @param Integer[][] $rooms
     * @return NULL
     */
    function wallsAndGates(&$rooms)
    {
        $this->rooms = $rooms;
        foreach ($rooms as $key => $value) {
            foreach ($value as $k => $item) {
                if ($rooms[$key][$k] == 0) {
                    $this->dfs($key, $k, 0);
                }
            }
        }
        $rooms = $this->rooms;
    }

    function dfs($key, $k, $val)
    {
        if ($key < 0 || $key >= count($this->rooms) || $k < 0 || $k > count($this->rooms[$key]) || @$this->rooms[$key][$k] < $val)
            return;
        $this->rooms[$key][$k] = $val;
        $this->dfs($key + 1, $k, $val + 1);
        $this->dfs($key - 1, $k, $val + 1);
        $this->dfs($key, $k + 1, $val + 1);
        $this->dfs($key, $k - 1, $val + 1);
    }

    function bfs(&$rooms)
    {
        foreach ($rooms as $key => $value) {
            foreach ($value as $k => $item) {
                if ($rooms[$key][$k] == 0) {
                    $this->queue[] = [$key, $k];
                }
            }
        }
        while (!empty($this->queue)) {
            $i = end($this->queue)[0];
            $j = end($this->queue)[1];
            array_pop($this->queue);
            $arr = [
                [$i - 1, $j],
                [$i + 1, $j],
                [$i, $j - 1],
                [$i, $j + 1],
            ];
            foreach ($arr as $item) {
                $key = reset($item);
                $k = end($item);
                if ($key < 0 || $key >= count($rooms) || $k < 0 || $k > count($rooms[0]) || @$rooms[$key][$k] < $rooms[$i][$j] + 1)
                    continue;
                $rooms[$key][$k] = $rooms[$i][$j] + 1;
                $this->queue[] = [$key, $k];
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
//$rooms = [[2147483647, 2147483647], [2147483647, 2147483647]];


$Solution = new Solution();
//$Solution->wallsAndGates($rooms);
$Solution->bfs($rooms);

var_dump($rooms);