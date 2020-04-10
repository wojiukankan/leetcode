<?php

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        $count = count($digits) - 1;
        $num = [];
        $i = 1;
        $j = 0;
        while (isset($digits[$count])) {
            $sum = $digits[$count] + $i;
            if ($sum >= 10) {
                $sum = $sum % 10;
                $i = 1;
            } else {
                $i = 0;
            }
            array_unshift($num, $sum);
            $j++;
            $count--;
        }
        if ($i > 0) {
            array_unshift($num, $i);
        }
        return $num;
    }
}

$digits = [1, 2, 3];
var_dump((new Solution)->plusOne($digits));