<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/11/28
 * Time: 10:37
 */

/**
 * 浏览器友好的变量输出,便于调试时候使用
 *
 * @param     mixed $var 要输出查看的内容
 * @param     bool $echo 是否直接输出
 * @param     string $label 加上说明标签,如果有,这显示"标签名:"这种形式
 * @param     bool $strict 是否严格过滤
 * @return    string
 */
if (!function_exists('Dump')) {
    function Dump()
    {
        $argc = func_get_args();
        foreach ($argc as $value) {
            Dumps($value);
        }
    }

    function Dumps($var, $echo = true, $label = null, $strict = true)
    {
        $label = ($label === null) ? '' : rtrim($label) . ' ';
        if (!$strict) {
            if (ini_get('html_errors')) {
                $output = print_r($var, true);
                $output = "<pre>" . $label . htmlspecialchars($output, ENT_QUOTES) . "</pre>";
            } else {
                $output = $label . " : " . print_r($var, true);
            }
        } else {
            ob_start();
            var_dump($var);
            $output = ob_get_clean();
            if (!extension_loaded('xdebug')) {
                $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
                $output = '<pre>' . $label . htmlspecialchars($output, ENT_QUOTES) . '</pre>';
            }
        }
        if ($echo) {
            echo($output);
            return null;
        } else
            return $output;
    }
}
/**
 * 调试方法
 * @param  array $data [description]
 */
function p($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


class Node
{
    public $data = '';
    public $next = null;

    function __construct($data)
    {
        $this->data = $data;
    }

    //链表有几个节点
    function countNode($head)
    {
        $cur = $head;
        $i   = 0;
        while (!is_null($cur->next)) {
            ++$i;
            $cur = $cur->next;
        }
        return $i;
    }

    //增加节点
    function addNode($head, $data)
    {
        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $this->addNode($head, $v);
            }
        } else {
            $cur = $head;
            while (!is_null($cur->next)) {
                $cur = $cur->next;
            }
            $next      = new Node($data);
            $cur->next = $next;
        }
    }

    // 插入$no 后
    function insertNode($head, $data, $no)
    {
        if ($no > $this->countNode($head))
            return false;
        $cur = $head;
        $new = new Node($data);
        for ($i = 0; $i < $no; $i++) {
            $cur = $cur->next;
        }
        $new->next = $cur->next;
        $cur->next = $new;
    }

    //删除 第$no 个节点
    function delNode($head, $no)
    {
        if ($no > $this->countNode($head))
            return false;
        $cur = $head;
        for ($i = 0; $i < $no - 1; $i++) {
            $cur = $cur->next;
        }
        $cur->next = $cur->next->next;
    }

    //根据 节点 value删除节点
    function delNodeValue($head, $value)
    {
        $cur = $head;
        $i   = 0;
        while (!is_null($cur->next)) {
            $cur = $cur->next;
            ++$i;
            if ($cur->data == $value) {
                $this->delNode($head, $i);
            }
        }
        return;
    }

    /**
     * @param $head 链表
     * @param $num  删除倒数的节点
     */
    public function undelNode($head, $num)
    {
        $frist  = $head;
        $second = $head;
        for ($i = 0; $i < $num; $i++) {
            $frist = $frist->next;
        }
        while (!@is_null($frist->next)) {
            $frist  = $frist->next;
            $second = $second->next;
        }
        $second->next = $second->next->next;
    }

    /**
     * 反转链表
     * @param $head
     * @return unNodes
     */
    public function unNode($head)
    {
        $cur = $head;
        $i   = 0;
        $arr = [];
        while (!is_null($cur->next)) {
            ++$i;
            $cur   = $cur->next;
            $arr[] = $cur->data;
        }
        $arr  = $this->unarr($arr);
        $head = new  unNodes(null);
        $head->addNode($head, $arr);
        return $head;
    }

    /**
     * 数组反转
     * @param $arr
     * @return array|void
     */
    public function unarr($arr)
    {
        if (!end($arr))
            return;
        $b   = [];
        $b[] = end($arr);
        while (prev($arr)) {
            $b[] = current($arr);
        }
        return $b;
    }

    /**
     * 合并两个链表
     * @param $node
     * @param $data
     */
    public function andNode($node, $data)
    {
        $cur  = $node;
        $sout = $data;
        while (!is_null($cur->next)) {
            $cur = $cur->next;
        }
        while (!is_null($sout->next)) {
            $cur->next = $sout->next;
            $cur       = $cur->next;
            $sout      = $sout->next;
        }

    }

    /**
     * 回文链表
     * @param $node
     */
    public function Palindrome($node)
    {
        $cur = $node;
        $sum = 0;
        $i   = 1;
        $arr = [];
        while (!is_null($cur->next)) {
            $arr[] = $cur->next->data;
            $sum   = $sum + $cur->next->data * $i;
            ++$i;
            $cur = $cur->next;
        }
        $i   = 1;
        $b[] = end($arr);
        $sum = $sum - current($arr) * $i;
        ++$i;
        while (prev($arr)) {
            $sum = $sum - current($arr) * $i;
            p(current($arr));
            p($i);
            echo '<hr>';
            ++$i;
        }
        if ($sum == 0)
            echo 'true';
        else
            echo 'false';
    }

    //遍历链表
    function showNode($head)
    {
        $cur = $head;
        while (!is_null($cur->next)) {
            $cur = $cur->next;
            echo $cur->data, '<br>';
        }
    }
}

class Tree
{
    public $key;
    public $parent;
    public $left;
    public $right;

    public function __construct($key)
    {
        $this->key    = $key;
        $this->parent = NULL;
        $this->left   = NULL;
        $this->right  = NULL;
    }
}





