<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/2
 * Time: 19:15
 */

//罗马数字转整数
/**
 * @param $num
 */
class Rome{
    protected $num;
    protected $last;
    protected $add;
    public function __construct($num)
    {
        $this->num = $num;
        $this->last = null;
        $this->add = 0;
        $this->jie();
    }
    public function jie()
    {
        $len = strlen($this->num);
        for ($i=0;$i<$len;$i++){
            $num = $this->num[$i];
            $this->add += $this->Rule($num);
        }
        Dump($this->add);
    }
    protected function Rule($data)
    {
        Dump($data);
        switch ($data){
            case 'I':
                $num = $this->I($data);
                break;
            case 'V':
                $num = $this->V($data);
                break;
            case 'X':
                $num = $this->X($data);
                break;
            case 'L':
                $num = $this->L($data);
                break;
            case 'C':
                $num = $this->C($data);
                break;
            case 'D':
                $num = $this->D($data);
                break;
            case 'M':
                $num = $this->M($data);
                break;
            default:
                return 'error';
        }
        return $num;
    }
    protected function I($data)
    {
        $this->last = $data;
        return 1;
    }
    protected function V($data)
    {
        if ($this->last=='I'){
            return 3;
        }
        $this->last = $data;
        return 5;
    }
    protected function X($data)
    {
        if ($this->last=='I'){
            return 8;
        }
        $this->last = $data;
        return 10;
    }
    protected function L($data)
    {
        if ($this->last=='X'){
            return 30;
        }
        $this->last = $data;
        return 50;
    }
    protected function C($data)
    {
        if ($this->last=='X'){
            return 80;
        }
        $this->last = $data;
        return 100;
    }
    protected function D($data)
    {
        if ($this->last=='C'){
            return 300;
        }
        $this->last = $data;
        return 500;
    }
    protected function M($data)
    {
        if ($this->last=='C'){
            return 800;
        }
        $this->last = $data;
        return 1000;
    }

}

$num= new Rome('LVIII');