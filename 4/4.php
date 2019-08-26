<?php

class Solution {

    /**
     * 复杂度不通过 todo
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $i = $j = 0;
        $nums = [];
        while (isset($nums1[$i]) && isset($nums2[$j])) {
            if ($nums1[$i] > $nums2[$j]) {
                $nums[] = $nums2[$j];
                unset($nums2[$j]);
                $j++;
            } else {
                $nums[] = $nums1[$i];
                unset($nums1[$i]);
                $i++;
            }
        }
        $nums = array_merge($nums, $nums1, $nums2);
        $count = count($nums);
        if ($count % 2 == 0) {
            $mid = $count / 2;
            return ($nums[$mid] + $nums[$mid - 1]) / 2;
        } else {
            $mid = floor($count / 2);
            return $nums[$mid];
        }
    }
}

var_dump((new Solution)->findMedianSortedArrays([1, 2], [3, 4]));