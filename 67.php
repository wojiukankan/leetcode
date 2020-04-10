<?php

class Solution
{

    /**
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $alen = strlen($a);
        $blen = strlen($b);
        $len = 1;
        $k = 0;
        $sum = '';
        while ($alen - $len >= 0 || $blen - $len >= 0) {
            $i = $alen - $len >= 0 ? $a[$alen - $len] : 0;
            $j = $blen - $len >= 0 ? $b[$blen - $len] : 0;
            if ($i + $j + $k >= 2) {
                $sum = (($i + $j + $k) - 2) . $sum;
                $k = 1;
            } else {
                $sum = ($i + $j + $k) . $sum;
                $k = 0;
            }
            $len++;
        }
        if ($k === 1) {
            $sum = $k . $sum;
        }
        return $sum;
    }
}

$a = "1010";
$b = "1011";
var_dump((new Solution)->addBinary($a, $b));