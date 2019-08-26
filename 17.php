<?php

class Solution {

    private $shineUpon = [
        2 => ['a', 'b', 'c'],
        3 => ['d', 'e', 'f'],
        4 => ['g', 'h', 'i'],
        5 => ['j', 'k', 'l'],
        6 => ['m', 'n', 'o'],
        7 => ['p', 'q', 'r', 's'],
        8 => ['t', 'u', 'v'],
        9 => ['w', 'x', 'y', 'z'],
    ];

    /**
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits) {
        $arr = [];
        $i = 0;
        while (isset($digits[$i])) {
            $arr = $this->combination($arr, $this->shineUpon[$digits[$i]]);
            $i++;
        }
        return $arr;
    }

    function combination($arr, $shineUpon) {
        if (empty($arr)) {
            return $shineUpon;
        }
        $result = [];
        foreach ($arr as $item) {
            foreach ($shineUpon as $v) {
                $result[] = $item . $v;
            }
        }
        return $result;
    }
}

var_dump((new Solution)->letterCombinations('2'));