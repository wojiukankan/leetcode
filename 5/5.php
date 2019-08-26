<?php

class Solution {
    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {

        $separator = '#';
        $i = 0;
        $str = $separator;
        while (isset($s[$i])) {
            $str = $str . $s[$i] . $separator;
            $i++;
        }
        $i = 0;
        $mx = 0;
        $p = [];
        $max = 0;
        $center = 0;
        $id = 0;
        while (isset($str[$i])) {
            if ($i < $mx) {
                $p[$i] = min($p[2 * $id - $i], $mx - $i);
            } else {
                $p[$i] = 1;
            }
            while ($i - $p[$i] >= 0 && isset($str[$i + $p[$i]]) && $str[$i - $p[$i]] == $str[$i + $p[$i]]) {
                $p[$i]++;
            }

            if ($mx < $i + $p[$i]) {
                $id = $i;
                $mx = $i + $p[$i];
            }
            if ($max < $p[$i] - 1) {
                $max = $p[$i] - 1;
                $center = $i;
            }
            $i++;
        }
        return substr($s, ($center - $max) / 2, $max);
    }
}


var_dump((new Solution)->longestPalindrome("aaa"));
