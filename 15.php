<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $max = count($nums) - 3;
        $jmax = $max + 2;
        sort($nums);
        $result = [];
        for ($c = 0; $c <= $max; $c++) {
            $i = $c + 1;
            $j = $jmax;
            if ($nums[$c] > 0) {
                return $result;
            }
            while ($i < $j) {
                if ($c > 0 && $nums[$c] == $nums[$c - 1]) {
                    break;
                } else {
                    if ($nums[$j] < 0) {
                        break;
                    }
                    if ($j < $jmax && $nums[$j] == $nums[$j + 1]) {
                        $j--;
                        continue;
                    }
                    if ($i - 1 > $c && $nums[$i] == $nums[$i - 1]) {
                        $i++;
                        continue;
                    }
                    $sum = $nums[$i] + $nums[$j] + $nums[$c];
                    if ($sum == 0) {
                        $result[] = [$nums[$c], $nums[$i], $nums[$j]];
                        $i++;
                        $j--;
                    } elseif ($sum < 0) {
                        $i++;
                    } elseif ($sum > 0) {
                        $j--;
                    }
                }
            }
        }
        return $result;
    }
}

var_dump((new Solution)->threeSum([6, -5, -6, -1, -2, 8, -1, 4, -10, -8, -10, -2, -4, -1, -8, -2, 8, 9, -5, -2, -8, -9, -3, -5]));