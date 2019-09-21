<?php

class Solution
{

    /**
     * @param String $s
     *
     * @return String
     */
    protected $size = [
        'len' => 1,
        'str' => '',
    ];
    protected $len;
    protected $str;

    function longestPalindrome($s)
    {
        $this->str         = $s;
        $this->size['str'] = $s{0};
        $this->len         = strlen( $s );
        if ($this->len <= 1) {
            return $s;
        }
        for ($i = 0; $i < $this->len; $i++) {
            $this->check( $i, $i );
            $this->check( $i, $i + 1 );
        }
        return $this->size['str'];
    }

    function check($left, $right)
    {
        while ($left >= 0 && $right < $this->len && $this->str[$left] == $this->str[$right]) {
            $sum = $right - $left + 1;
            if ($sum > $this->size['len']) {
                $this->size = [
                    'len' => $sum,
                    'str' => substr( $this->str, $left, $sum )
                ];
            }
            $left--;
            $right++;
        }
    }


    function one($s)
    {
        $len = strlen( $s );
        if ($len < 2) return $s;         //初始化判断
        $str    = '^#' . implode( '#', str_split( $s ) ) . '#$';   //分割字符串，使奇偶性统一
        $len    = strlen( $str );            //计算改好的字符串长度
        $r      = array_fill( 0, $len, 0 );    //初始化半径数组
        $center = $maxRight = 0;        //初始化偏移量：中心点和回文串最大右点
        $maxStr = '';                   //结果，最长的回文串
        for ($i = 1; $i < $len; ++$i) {
            if ($i < $maxRight) {
                $r[$i] = min( $maxRight - $i, $r[2 * $center - $i] );    //计算当前回文路径的长度
            }
            while ($str[$i - $r[$i] - 1] == $str[$i + $r[$i] + 1]) {    //扩展回文子串
                $r[$i]++;
            }
            if ($i + $r[$i] > $maxRight) {  //如果超出最右的点，则更新中心点和右节点
                $maxRight = $i + $r[$i];
                $center   = $i;
            }
            if (1 + 2 * $r[$i] > strlen( $maxStr )) {       //计算当前回文子串是否大于记录的结果
                $maxStr = substr( $str, $i - $r[$i], 2 * $r[$i] + 1 );
            }
        }
        return str_replace( '#', '', $maxStr );
    }
}

$s = 'babad';
$s = "cbbd";
$s = "bb";
//$s        = "ccc";
//$s        = "abcda";
//$s        = "aaabaaaa";
//$s        = "civilwartestingwhetherthatnaptionoranynartionsoconceivedandsodedicatedcanlongendureWeareqmetonagreatbattlefiemldoftzhatwarWehavecometodedicpateaportionofthatfieldasafinalrestingplaceforthosewhoheregavetheirlivesthatthatnationmightliveItisaltogetherfangandproperthatweshoulddothisButinalargersensewecannotdedicatewecannotconsecratewecannothallowthisgroundThebravelmenlivinganddeadwhostruggledherehaveconsecrateditfaraboveourpoorponwertoaddordetractTgheworldadswfilllittlenotlenorlongrememberwhatwesayherebutitcanneverforgetwhattheydidhereItisforusthelivingrathertobededicatedheretotheulnfinishedworkwhichtheywhofoughtherehavethusfarsonoblyadvancedItisratherforustobeherededicatedtothegreattdafskremainingbeforeusthatfromthesehonoreddeadwetakeincreaseddevotiontothatcauseforwhichtheygavethelastpfullmeasureofdevotionthatweherehighlyresolvethatthesedeadshallnothavediedinvainthatthisnationunsderGodshallhaveanewbirthoffreedomandthatgovernmentofthepeoplebythepeopleforthepeopleshallnotperishfromtheearth";
$Solution = new Solution();
$data     = $Solution->one( $s );
var_dump( $data );