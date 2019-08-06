<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $count = strlen($s);
        $max = $len = 0;
        $arr = [];
        $i = $j = 0;
        while ($j < $count) {
            if (isset($arr[$s[$j]]) && $arr[$s[$j]] >= $i) {
                $i = $arr[$s[$j]];
                $len = $j - $i;
            } else {
                $len++;
            }
            if ($max < $len) $max = $len;
            $arr[$s[$j]] = $j;
            $j++;
        }
        return $max;
    }
}

var_dump((new Solution)->lengthOfLongestSubstring("abcabcbb"));