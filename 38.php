<?php

class Solution
{
    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n)
    {
        $num = '1';
        while (--$n) {
            $i = 0;
            $str = '';
            $start = $num[0];
            $count = 1;
            while ($i<strlen($num)) {
                if (isset($num[++$i])) {
                    if ($num[$i] === $start) {
                        $count++;
                    } else {
                        $str .= $count . $start;
                        $start = $num[$i];
                        $count = 1;
                    }
                } else {
                    $str .= $count . $start;
                    $count = 1;
                }
            }
            $num = $str;
        }
        return $num;
    }
}


$n = 2;
var_dump((new Solution)->countAndSay($n));