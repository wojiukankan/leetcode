<?php

class Solution
{

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x)
    {
        $max = $x;
        $min = 1;
        while (true) {
            $mid = floor(($max + $min) / 2);
            if ($mid * $mid > $x) {
                $max = $mid;
            } elseif ($mid * $mid < $x) {
                $min = $mid;
            } else {
                return $mid;
            }
            if ($min + 1 == $max) {
                return $min;
            }
        }
        return $max;
    }
}

$x = 1;
var_dump((new Solution)->mySqrt($x));