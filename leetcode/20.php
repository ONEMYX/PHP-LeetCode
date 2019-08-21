<?php
class Solution {

    /**
     * 给定一个只包括 '('，')'，'{'，'}'，'['，']' 的字符串，判断字符串是否有效。

    有效字符串需满足：

    左括号必须用相同类型的右括号闭合。
    左括号必须以正确的顺序闭合。
    注意空字符串可被认为是有效字符串。

    来源：力扣（LeetCode）
    链接：https://leetcode-cn.com/problems/valid-parentheses
    著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
     *
     * 后进 先闭合
     *
     * @param String $s
     * @return Boolean
     */
    protected $arr = [];
    function isValid($s) {
        $i = 0;
        while (isset($s{$i})){
            if ($this->panduan($s{$i}))
                $i++;
            else
                return false;
        }
        return empty($this->arr);
    }
    function panduan($str){
        switch ($str){
            case '{':
            case '(':
            case '[':
                $this->arr[] = $str;
                return true;
            case ')':
                if (end($this->arr)!='(')
                    return false;
                else
                    array_pop($this->arr);
                return true;
            case '}':
                if (end($this->arr)!='{')
                    return false;
                else
                    array_pop($this->arr);
                return true;
            case ']':
                if (end($this->arr)!='[')
                    return false;
                else
                    array_pop($this->arr);
                return true;
        }
    }
}

$x = "()";
$x = "()[]{}";
$x = "(]";
$x = "([)]";
//$x = "{[]}";
$solution  = new  Solution();
$a = $solution->isValid($x);
var_dump($a);