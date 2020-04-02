<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums)
    {
        $i = 0;
        $tmp = 0;
        $sum = '';
        while (isset($nums[$i])) {
            $tmp += $nums[$i];
            $sum = ($sum || $sum === 0) ? $sum : $tmp;
            $sum = $sum > $tmp ? $sum : $tmp;
            $tmp = $tmp > 0 ? $tmp : 0;
            $i++;
        }
        return $sum;
    }
}

$nums = [-1, 0, -2];
var_dump((new Solution)->maxSubArray($nums));