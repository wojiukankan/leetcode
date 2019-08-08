<?php

class Solution {

//$str = trim($str);
//$pos = strpos($str, 'e');
//if ($pos !== false) {
//$str = substr($str, 0, $pos);
//}
//$result = intval($str);
//if ($result < -2147483648) {
//    return -2147483648;
//}
//if ($result > 2147483647) {
//    return 2147483647;
//}
//return $result;
    /**
     * @param String $str
     * @return Integer
     */
    function myAtoi($str) {

        $new = 0;
        $max = pow(2, 31);
        $i = 0;
        $isfst = true;
        $symbols = ['+' => 1, '-' => -1];
        $str = ltrim($str);
        $symbol = 1;
        while (isset($str[$i])) {
            if ($isfst) {
                if (isset($symbols[$str[$i]])) {
                    $symbol = $symbols[$str[$i]];
                    $isfst = false;
                } elseif (is_numeric($str[$i])) {
                    $new = $str[$i];
                    $isfst = false;
                } else {
                    break;
                }
            } else {
                if (is_numeric($str[$i])) {
                    $new = $new * 10 + $str[$i];
                } else {
                    break;
                }
            }
            $i++;
        }
        $new = $symbol * $new;
        if ($new > $max - 1) {
            $new = $max - 1;
        } elseif ($new < -$max) {
            $new = -$max;
        }
        return $new;
    }
}

var_dump((new Solution)->myAtoi("+-2"));