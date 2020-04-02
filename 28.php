<?php

class Solution
{
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle)
    {
        if ($needle === '') {
            return 0;
        }
        $lenH = strlen($haystack);//10
        $lenN = strlen($needle);//5
        $i = 0;
        while ($i <= $lenH - $lenN) {
            if ($haystack[$i] === $needle[0] && substr($haystack, $i, $lenN) === $needle) {
                return $i;
            }
            $i++;
        }
        return -1;
    }
}

$haystack = 'hello';
$needle = 'll';
var_dump((new Solution)->strStr($haystack, $needle));