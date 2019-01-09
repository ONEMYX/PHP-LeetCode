<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 17:25
 */
include ('../function.php');
class nodes extends Node{
    public function andNode($node,$data)
    {
        $cur = $node;
        $sout = $data;
        while(!is_null($cur->next)){
            $cur = $cur->next;
        }
        while (!is_null($sout->next)){
            $cur->next = $sout->next;
            $cur = $cur->next;
            $sout = $sout->next;
        }

    }
}
$data = new  nodes(null);
$a = ['11','22','33','44'];
$data->addNode($data,$a);
$data->showNode($data);
echo '<hr>';
$node = new  nodes(null);
$a = ['aa','bb','cc','dd'];
$node->addNode($node,$a);
$node->showNode($node);
echo '<hr>';
$node->andNode($node,$data);
$node->showNode($node);
echo '<hr>';


