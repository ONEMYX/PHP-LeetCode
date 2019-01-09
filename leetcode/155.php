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
class Stack{
    /**
     * @var int
     */
    protected $maxSize = 10;
    /**
     * @var array
     */
    protected $arr = [];
    /**
     * @var int
     */
    protected $top = -1;
    /**
     * @var
     */
    protected $out;

    /** 添加到栈
     *
     * @param $string
     * @return string
     */
    public function push($string)
    {
        if ($this->top >= $this->maxSize){
            return 'error';
        }
        ++$this->top;
        $this->arr[$this->top] = $string;
        $this->outPut();
    }

    /** 删除最顶
     *
     * @return string
     */
    public function pop()
    {
        if ($this->top<0)
            return 'error';
        $this->out = $this->arr[$this->top];
        unset($this->arr[$this->top]);
        --$this->top;
        echo $this->out;
        unset($this->out);
    }

    /** 获取栈顶元素
     *
     * @return string
     */
    public function top(){
        if ($this->top<0)
            return 'error';
        $this->out = $this->arr[$this->top];
        return $this->out;
    }

    /** 获取最小元素
     *
     */
    public function getMin(){
        if ($this->top < 0 )
            return 'error';
        $min = $this->arr[0];
        for ($i=1;$i<=$this->top;$i++){
            if ($this->arr[$i]<$min){
                $min = $this->arr[$i];
            }
        }
        return $min;
    }

    /** 显示 栈的所有元素
     *
     */
    public function outPut(){
        Dump($this->arr);
    }
}
$Stack = new Stack();
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
Dump($b);
