<?php

class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        if ($needle === '') {
            return 0;
        }
        $i = 0;
        $j = 0;
        while (isset($haystack[$i])) {
            if (!isset($needle[0 + $j])) {
                return $i - $j;
            }
            if ($haystack[$i] == $needle[0 + $j]) {
                $j++;
            } else {
                $j = 0;
            }
            $i++;
        }
        if (!isset($needle[0 + $j])) {
            return $i - $j;
        }
        return -1;
    }
}

$haystack = 'mississippi';
$needle = 'issip';
var_dump((new Solution)->strStr($haystack, $needle));