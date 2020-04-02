<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $max = count($nums);
        $min = 0;
        while ($min < $max) {
            $mid = floor(($max + $min) / 2);
            if ($nums[$mid] < $target) {
                $min = $mid + 1;
            } else {
                $max = $mid;
            }
        }
        return $min;
    }
}

$nums = [1, 2, 3, 5, 6];
$target = 0;
var_dump((new Solution)->searchInsert($nums, $target));