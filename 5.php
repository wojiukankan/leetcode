<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        $k = $i = 0;
        $arr = [];
        $diff = 1;
        while (isset($s[$i])) {
            $arr[$k] = isset($arr[$k]) ? $arr[$k] . $s[$i] : $s[$i];
            $i++;
            if ($k == 0) {
                $diff = 1;
            } elseif ($k == $numRows - 1) {
                $diff = -1;
            }
            $k += $diff;
        }
        return implode('', $arr);
    }
}

var_dump((new Solution)->convert('asfasqweqrqw', 3));
