<?php

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $len = strlen(abs($x));
        $new = 0;
        $max = pow(2, 31);
        while ($len) {
            $remainder = $x % 10;
            $new = $new * 10 + $remainder;
            if ($new > $max - 1 || $new < -$max) {
                $new = 0;
                break;
            }
            $x = $x / 10;
            $len--;
        }
        return $new;
    }
}

var_dump((new Solution)->reverse(-123));