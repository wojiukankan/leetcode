<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $areas = 0;
        $i = 0;
        $j = count($height) - 1;
        while ($i < $j) {
            if ($height[$i] < $height[$j]) {
                $areas = max($height[$i] * ($j - $i), $areas);
                $i++;
            } else {
                $areas = max($height[$j] * ($j - $i), $areas);
                $j--;
            }
        }
        return $areas;
    }
}

var_dump((new Solution)->maxArea([1, 8, 6, 2, 5, 4, 8, 3, 7]));