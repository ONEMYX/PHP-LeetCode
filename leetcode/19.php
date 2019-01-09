<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 14:09
 */
//删除链表的倒数第N个节点

include ('../function.php');
class Nodes extends Node{

}

$data = new  Nodes(null);
$a = ['1','2','3','4'];
$data->addNode($data,$a);
$data->showNode($data);
echo '<hr>';
$data->undelNode($data,4);
$data->showNode($data);
