<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $nums1 = [];
        foreach ($nums as $k => $v) {
            $difference = $target - $v;
            if (isset($nums1[$difference])) {
                return [$k, $nums1[$difference]];
            } else {
                $nums1[$v] = $k;
            }
        }
    }
}

var_dump((new Solution)->twoSum([2, 7, 11, 15], 9));