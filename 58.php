<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     * "a "
     */
    function lengthOfLastWord($s)
    {
        $len = strlen($s) - 1;
        $count = 0;
        while ($len >= 0) {
            if ($count > 0 && $s[$len] === ' ') {
                return $count;
            }
            if ($s[$len] !== ' ') {
                $count++;
            }
            $len--;
        }
        return $count;
    }
}

$s = 'a';
var_dump((new Solution)->lengthOfLastWord($s));