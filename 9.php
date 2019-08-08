<?php

class Solution {

//    $new = strrev($x);
//    return $new == $x ? true : false;
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0 || ($x % 10 == 0 && $x != 0)) {
            return false;
        }
        $new = 0;
        while (true) {
            $new = $new * 10 + $x % 10;
            $x = intval($x / 10);
            if ($new >= $x) {
                break;
            }
        }
        return $new == $x || intval($new / 10) == $x ? true : false;
    }
}

var_dump((new Solution)->isPalindrome(12321));