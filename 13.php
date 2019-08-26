<?php


class Solution {

    private $config = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    private $fourAndNine = [
        'IV' => -2,
        'IX' => -2,
        'XL' => -20,
        'XC' => -20,
        'CD' => -200,
        'CM' => -200,
    ];

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {

        $str = '00';
        $i = strlen($s) - 1;
        $int = 0;
        while ($i >= 0) {
            $str[1] = $str[0];
            $str[0] = $s[$i];
            $int += $this->config[$s[$i]];
            if (isset($this->fourAndNine[$str])) {
                $int += $this->fourAndNine[$str];
                $str = '00';
            }
            $i--;
        }
        return $int;
    }
}

var_dump((new Solution)->romanToInt('MCMXCIV'));