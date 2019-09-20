<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {

        foreach ($nums as $k => $v) {
            if ($v === $val) {
                unset($nums[$k]);
            }
        }
        return count($nums);
    }
}

$nums = [1, 1, 2];
var_dump((new Solution)->removeElement($nums, 1));