<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {

        $tmp = '';
        foreach ($nums as $k => $v) {
            if ($tmp === $v) {
                unset($nums[$k]);
            } else {
                $tmp = $v;
            }
        }
        return count($nums);
    }
}

$nums = [1, 1, 2];
var_dump((new Solution)->removeDuplicates($nums));