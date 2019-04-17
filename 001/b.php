<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2019/1/22
 * Time: 11:38
 */

class hongbao{
    protected $money;


    /**
     * @param mixed $money
     */
    public function setMoney($money): void
    {
        $this->money = $money;
    }

    public function mb_rand($min=0,$max=100){
        $num = rand($min,$max);
        return $num;
    }
}