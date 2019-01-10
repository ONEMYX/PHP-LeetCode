<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/12/19
 * Time: 16:30
 */

//入口文件
include_once ('function.php');

defined('CONF_EXT') or define('CONF_EXT', '.php');
define('NOW_URL', $_SERVER['REQUEST_URI']);
define('REQUEST_METHOD', $_SERVER['REQUEST_METHOD']) or define('REQUEST_METHOD','NOT');
define('HTTP_REFERER', isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '');
define('IS_GET', REQUEST_METHOD == 'GET' ? true : false);
define('IS_POST', REQUEST_METHOD == 'POST' ? true : false);
$ruleList = explode('/', rtrim(NOW_URL, '$'));
$name = end($ruleList);
if ($name =='phpinfo'){
    phpinfo();
    exit();
}
$file = 'leetcode/'.$name.'.php';
if (is_file($file)){
    include $file;
}elseif(!$name){
    echo '没有此文件';
}else{
    var_dump($ruleList,$name);
}
