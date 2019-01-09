<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/3
 * Time: 14:42
 */
include ('function.php');
$id = '6';
$code = md5($id.'freebuf_2017').md5($id.'my.freebuf_2017');
p($code);
$id = '6freebuf_2017';
p(md5($id));
